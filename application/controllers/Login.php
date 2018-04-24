<?php

class Login extends CI_Controller{
    function index(){
        if(!$this->session->has_userdata('userId')){
            $this->load->view('login');
        }else{
            redirect('http://127.0.0.1/TubesWebpro/kuriak');
        }
    }
    function action(){
        if(!isset($_POST['email'])&&
        ($this->db->query('select id from user where email="'.$_POST['email'].'"')->num_rows()>0)){
            $this->session->set_userdata('userId',$this->db->query('select id from user where email="'.$_POST['email'].'"'));
            redirect($this->config->base_url());
        }
    }
}

?>