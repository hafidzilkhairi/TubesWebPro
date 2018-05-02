<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controlbarang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('barang');
    }
    public function index(){
        $this->load->helper(array('form', 'url'));
        $data['data']=$this->barang->getbarang();
        $this->load->view('tampiltable',$data, array('error' => ' ' ));

    }
    public function editproduk(){
        $replace=$_GET['idbarang'];
        $config['upload_path']='image/';
        $config['allowed_types']= 'gif|jpg|png|jpeg';
        $config['overwrite']=TRUE;
        $config['max_size']= 5000000;
        $config['file_name']=$replace.".jpg";
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambir')) {
       
        }else{
            $error = array('error' => $this->upload->display_errors());
        }
    }

    public function uploadimage(){
        $config['upload_path']='image/';
        $config['allowed_types']= 'gif|jpg|png|jpeg';
        $config['overwrite']=TRUE;
        $config['max_size']= 5000000;
        $maksimum= $this->db->query('select max(idbarang) from barang')->result_array();
        foreach ($maksimum as $b) {
            foreach ($b as $s => $value) {
                $maksimum= $value+1;
            }
        }
        $config['file_name']=$maksimum.".jpg";


        $this->load->library('upload', $config);
        $this->load->helper(array('form', 'url'));
        if($this->upload->do_upload('fileuser')){
            $data = array('upload_data' => $this->upload->data());
            $isi['judul']=$this->input->post('judul');
            $isi['deskripsi']=$this->input->post('deskripsi');
            $isi['harga']=$this->input->post('harga');
            $this->barang->save_data($isi,$maksimum);
            $data['data']=$this->barang->getbarang();
            $this->load->view('tampiltable',$data);

        }
        else{
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('percobaan', $error);
        }

    }
    public function hapus()
    {   
        $dihapus=$_GET['idbarang'];
        $hapus=$this->barang->delete_data($dihapus);
        if($hapus){
            echo "<script>alert('berhasil Hapus Data');</script>";
        }else{
            echo "<script>alert('Gagal Hapus Data');</script>";

        }
    }

    public function edit(){
        $data=$this->input->post(null,TRUE);
        $hafis=$_GET['idbarang'];
        $edit=$this->barang->edit_data($data,$hafis);
        if ($edit) {
            echo "<script>alert('berhasil Edit Data');</script>";
        }else{
             echo "<script>alert('Gagal Edit Data');</script>";
        }
    }




//     public function kelolabarang(){
//         $data['barang']=$this->db->get('barang')->result_array();
//         $data['error']='';
//         $this->load->view('tampiltable',$data);
// }
//    public function editbarang(){

//    }

//    public function hapusbarang(){
//     if(isset($_GET['id'])){
//         $this->db->where('id_barang',(int)$_GET['id']);
//         if($this->db->delete('barang')){

//         }else{

//         }
//         redirect($this->config->base_url()."controlbarang");
//     }
//    }
//    public function tabmahbarang(){
//     if (isset($_POST['namabarang'])) {
//         $data['nama_barang']
//     }
//    }


}

?>