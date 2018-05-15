<?php
class Keranjang extends CI_Controller{
    function index(){
        $this->db->where('id_user',$_SESSION['userId']);
        $data['keranjang'] = $this->db->get('keranjang')->result_array();
        $this->load->view('template/header.php');
        $this->load->view('keranjang',$data);
        $this->load->view('template/footer.php');
    }
    function hapusker(){
    	$data=$this->input->post('id');
    	$r= $this->db->query("delete from keranjang where id_keranjang=$data");
    	if ($r) echo "<script>alert('gagal')</script>"; 
    	else echo "<script>alert('gagal')</script>";
    	redirect('Keranjang');
    }
}
?> 