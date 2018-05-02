<?php
class Keranjang extends CI_Controller{
    function index(){
        $this->db->where('id_user',$_SESSION['userId']);
        $data['keranjang'] = $this->db->get('keranjang')->result_array();
        $this->load->view('template/header.php');
        $this->load->view('keranjang',$data);
        $this->load->view('template/footer.php');
    }
}
?>