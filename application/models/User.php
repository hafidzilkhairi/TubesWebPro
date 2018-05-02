<?php
class User extends CI_Model{
    function getUser($halaman){
        return $this->db->get('user')->result_array();
    }

    function isAvailable($email){
        return 0<$this->db->query('select * from user where email_user="'.$email.'"')->num_rows();
    }

    function tambahUser($email,$uname,$password){
        return $this->db->insert('user',array('email_user'=>$email,'username'=>$uname,'password_user'=>$password,'status_user'=>false));
    }

    function getInfoUser($email){
        return $this->db->get_where('user',array('email_user'=>$email))->result_array()[0];
    }
    function validasiUser($email,$pwd){
        return $this->db->get_where('user',array('email_user'=>$email,'password_user'=>$pwd))->num_rows()>0;
    }
    function hapus($id){
        $this->db->where('id_user', $id);
        return $this->db->delete('user');
    }

}
?>