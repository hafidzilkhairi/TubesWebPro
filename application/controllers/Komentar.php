<?php
class Komentar extends CI_Controller{
    function tambahkomentar($str = null){
        $data['id_barang'] = $str;
        $data['id_user'] = $_SESSION['userId'];
        $data['isi_komen'] = $_POST['isiKomen'];
        $this->db->insert('komenartikel',$data);
        redirect(base_url().'barang/'.$str);
    }
    function hapuskomentar($str){
        $id = $_GET['id'];
        $this->db->query('delete from komenartikel where id_komen='.$str);
        redirect(base_url().'barang/'.$id);
    }
}
?>