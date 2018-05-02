<?php
class Beli extends CI_Controller{
    
    function _remap($param) {
        $this->index($param);
    }
    function index($str){
        $data['id_user']=$_SESSION['userId'];
        $data['id_barang']=$str;
        $data['jumlah_barang'] = 1;
        $this->db->insert('keranjang',$data);
        redirect(base_url()."barang/".$str);
    }
}
?>