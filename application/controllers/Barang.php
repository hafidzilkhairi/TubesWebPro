<?php
class Barang extends CI_Controller{
    function _remap($param) {
        $this->index($param);
    }
    function index($str = null){
        if($str == null){
            $this->load->view('template/header.php');
            $data['barang'] = $this->db->get('barang')->result_array();
            $this->load->view('tampilanUtama',$data);
            $this->load->view('template/footer.php');
        }else{
            $this->load->view('template/header.php');
            $this->db->where('id_barang',$str);
            $query  = $this->db->get('barang');
            if($query->num_rows()>0){
                $data['barang'] = $query->result_array()[0];
            }else{
                $data['barang'] = null;
            }
            $this->load->view('singlebarang',$data);
            $this->load->view('template/footer.php');
        }
    }
}

?>