<?php

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user');
        $this->load->model('artikel');
        $this->load->model('barang');
    }
    function kelolaUser($halaman = 1){
        if($this->session->has_userdata('userAdminId')){
            $this->load->view('admin/template/header');
            if(isset($_GET['pencari'])&&$_GET['pencari']!=''){
                $data['user'] = $this->db->query('select * from user where email_user like "%'.$_GET['pencari'].'%"')->result_array();
                $this->load->view('admin/kelolaUser',$data);
            }else{
                $data['user']=$this->user->getUser($halaman);
                $this->load->view('admin/kelolaUser',$data);
            }
        }else{
            redirect($this->config->base_url()."admin/login");
        }
    }
    
    public function index(){
        if($this->session->has_userdata('userAdminId')){
            $this->load->view('admin/template/header');
            $data['user']=$this->user->getUser(1);
            $this->load->view('admin/kelolaUser',$data);
        }else{
            redirect($this->config->base_url()."admin/login");
        }
    }
    public function logout(){
        unset($_SESSION['userAdminId']);
        redirect($this->config->base_url()."admin");
    }
    public function login(){
        if(isset($_POST['email'])&&isset($_POST['pwd'])){
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            // $query = $this->db->query('select * from user where email="'.$email.'" and password="'.$pwd.'"');
            // if($query->num_rows()>0){
            //     session_destroy();
            //     echo $query->result_array()[0]['id'];
            //     $this->session->set_userdata('userAdminId',$query->result_array()[0]['id']);
            // }
            $this->form_validation->set_rules('email', 'Email', 'required|callback_sama');
            $this->form_validation->set_rules('pwd', 'Password', 'required');
            if ($this->form_validation->run() == FALSE){
                $this->load->view('admin/login');
            }else{
                unset($_SESSION['userId']);
                $this->session->set_userdata('userAdminId',$this->user->getInfoUser($email)['id_user']);
                redirect($this->config->base_url()."admin");
            }
        }else{
            $this->load->view('admin/login');
        }
    }
    public function sama(){
        if(isset($_POST['email'])){
            $email = $this->input->post('email');
            $pwd = $this->input->post('pwd');
            echo "<script>alert($email+'saya'+$pwd);</script>";
            if($this->user->validasiUser($email,$pwd)){
                return true;
            }else{
                if($_POST['email']==''){
                    $this->form_validation->set_message('sama','The Email field is required.');
                }else
                    $this->form_validation->set_message('sama','Maaf email tidak terdaftar atau Password salah');
                return $this->user->validasiUser($email,$pwd);
            }
        }else{
            $this->form_validation->set_message('sama','The Email field is required.');
            return false;
        }
    }
    public function editUser(){
        if($this->session->has_userdata('userAdminId')){
            if(isset($_POST['email'])){
                $this->db->query('update user SET email_user="'.$_POST['email'].'", password="'.$_POST['pwd'].'" where id_user='.$_POST['id']);
                redirect($this->config->base_url().'admin');
            }else{
                redirect($this->config->base_url().'admin/kelolaUser');
            }
        }else{
            redirect($this->config->base_url().'admin');
        }
    }
    public function hapus(){
        $id = $this->input->get('id');
        $this->user->hapus($id);
        redirect($this->config->base_url().'admin');
    }
    public function tambahUser(){
        if($this->session->has_userdata('userAdminId')){
            if(isset($_POST['email'])){
                $data['email_user']=$_POST['email'];
                $data['password_user']=$_POST['pwd'];
                $data['username'] = $_POST['uname'];
                $data['status_user']=$_POST['statusUser'];
                $dia = $this->db->query('select * from user where email_user="'.$data['email'].'" or username="'.$data['username'].'"')->num_rows();
                if($dia>0){
                    $this->session->set_flashdata('tambahuser','gagal');
                }else{
                    $this->db->insert('user',$data);
                    $this->session->set_flashdata('tambahuser','berhasil');
                }
                redirect($this->config->base_url().'admin/kelolaUser');
            }else{
                redirect($this->config->base_url().'admin/kelolaUser');
            }
        }else{
            redirect($this->config->base_url().'admin');
        }
    }
    public function kelolaArtikel(){
        if(isset($_SESSION['userAdminId'])){
            $query = $this->db->query('select * from artikel');
            if($query->num_rows>0){
                $data['artikel'] = $query->result_array()[0];
            }else{
                $data['artikel'] = $query->result_array();
            }
            $this->load->view('admin/template/header');
            $this->load->view('admin/kelolaArtikel',$data);
        }else{
            redirect($this->config->base_url().'admin');
        }
    }
    public function tambahArtikel(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['submitTambahArtikel'])){
                $artikel['judul_artikel'] = $_POST['judul'];
                $artikel['id_user'] = $_SESSION['userAdminId'];
                $artikel['deskripsi_artikel'] = $_POST['deskripsi'];
                $artikel['tgl_artikel']=date('Y-m-d');
                $this->artikel->insert($artikel);
                $idartikel = $this->db->query('select max(id_artikel) as maks from artikel')->result_array()[0]['maks'];
                $config['upload_path']          = 'asset/artikel/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 5000000;
                $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
                $data['id_artikel'] =(int) $idartikel;
                $uploadgambarartikel['id_artikel'] = $idartikel;
                $uploadgambarartikel['slug'] = '';
                $this->db->insert('gambarartikel',$uploadgambarartikel);
                $query = $this->db->query('select max(id_gambarartikel) as maks from gambarartikel')->result_array()[0];
                $config['file_name']=$query['maks'];
                $dia['slug'] = $query['maks'].'.'.$file_ext;
                //echo "<script>alert('".$dia['slug']."');</script>";
                $this->db->where('id_gambarartikel',$query['maks']);
                $this->db->update('gambarartikel',$dia);
                $this->load->library('upload', $config);
                if(file_exists('asset/artikel/'.$dia['slug'])) unlink('asset/artikel/'.$dia['slug']);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->db->query('delete from gambarartikel where id_gambarartikel='.$query['maks']);
                    $this->session->set_flashdata('uploadgambarartikel','gagal');
                    $error = array('error' => $this->upload->display_errors());
                    //echo 'gagal '.$this->upload->display_errors();
                }
                else
                {  
                    $this->session->set_flashdata('uploadgambarartikel','sukses');
                    //echo 'berhasil';
                }
                redirect($this->config->base_url().'admin/kelolaartikel');



            }else{
                $this->load->view('admin/template/header');
                $this->load->view('admin/tambahArtikel');
            }
        }else{
            redirect($this->config->base_url().'admin');
        }
    }
    public function kelolaBarang(){
        $this->load->helper(array('form', 'url'));
        $data['data']=$this->barang->getbarang();
        $this->load->view('admin/template/header');
        $this->load->view('admin/kelolabarang',$data, array('error' => ' ' ));
    }
    public function tambahBarang(){
        if(isset($_SESSION['userAdminId'])){
            if(isset($_POST['submitTambahBarang'])){
                $barang['nama_barang'] = $_POST['nama_barang'];
                $barang['deskripsi_barang'] = $_POST['deskripsi_barang'];
                $barang['harga_barang']=$_POST['harga_barang'];
                $this->db->insert('barang',$barang);
                $idbarang = $this->db->query('select max(id_barang) as maks from barang')->result_array()[0]['maks'];
                $config['upload_path']          = 'asset/barang/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 5000000;
                $file_ext = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);
                $data['id_barang'] =(int) $idbarang;
                $uploadgambarbarang['id_barang'] = $idbarang;
                $uploadgambarbarang['slug'] = '';
                $this->db->insert('gambarbarang',$uploadgambarbarang);
                $query = $this->db->query('select max(id_gambarbarang) as maks from gambarbarang')->result_array()[0];
                $config['file_name']=$query['maks'];
                $dia['slug'] = $query['maks'].'.'.$file_ext;
                //echo "<script>alert('".$dia['slug']."');</script>";
                $this->db->where('id_gambarbarang',$query['maks']);
                $this->db->update('gambarbarang',$dia);
                $this->load->library('upload', $config);
                if(file_exists('asset/barang/'.$dia['slug'])) unlink('asset/barang/'.$dia['slug']);
                if ( ! $this->upload->do_upload('userfile'))
                {
                    $this->db->query('delete from gambarbarang where id_gambarbarang='.$query['maks']);
                    $this->session->set_flashdata('uploadgambarbarang','gagal');
                    $error = array('error' => $this->upload->display_errors());
                    echo 'gagal '.$this->upload->display_errors();
                }
                else
                {  
                    $this->session->set_flashdata('uploadgambarbarang','sukses');
                    echo 'berhasil';
                }
                redirect($this->config->base_url().'admin/kelolabarang');



            }else{
                $this->load->view('admin/template/header');
                $this->load->view('admin/tambahBarang');
            }
        }else{
            redirect($this->config->base_url().'admin');
        }
    }
}

?>