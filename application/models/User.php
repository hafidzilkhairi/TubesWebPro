<?php
class User extends CI_Model{
    function getUser($halaman){
        return $this->db->get('user')->result_array();
    }

    function isAvailable($email){
        return 0<$this->db->query('select * from user where email="'.$email.'"')->num_rows();
    }

    function tambahUser($email,$password){
        return $this->db->insert('user',array('email'=>$email,'password'=>$password,'status'=>false));
    }

    function getInfoUser($email){
        return $this->db->get_where('user',array('email'=>$email))->result_array()[0];
    }
    function validasiUser($email,$pwd){
        return $this->db->get_where('user',array('email'=>$email,'password'=>$pwd))->num_rows()>0;
    }
    function hapus($id){
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
?>