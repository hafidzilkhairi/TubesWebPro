<?php

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function kelolaUser($halaman = 1){
        if($this->session->has_userdata('userAdminId')){
            $this->load->view('admin/template/header');
            if(isset($_GET['pencari'])&&$_GET['pencari']!=''){
                $data['user'] = $this->db->query('select * from user where email like "%'.$_GET['pencari'].'%"')->result_array();
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
    public function action(){
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
                $this->session->set_userdata('userAdminId',$this->user->getInfoUser($email)['id']);
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
                $this->db->query('update user SET email="'.$_POST['email'].'", password="'.$_POST['pwd'].'" where id='.$_POST['id']);
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
}

?>