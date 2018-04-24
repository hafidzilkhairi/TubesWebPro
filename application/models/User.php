<?php
class User extends CI_Model{
    function getUser($halaman){
        $jumlah = $halaman*10-10;
        return $this->db->get('user',10,$jumlah)->result_array();
    }
}
?>