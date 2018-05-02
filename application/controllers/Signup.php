<?php

class Signup extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        if(!$this->session->has_userdata('userId')){
            $this->load->view('signup');
        }else{
            redirect('http://127.0.0.1/TubesWebpro/');
        }
    }

    function action(){
        $email = $this->input->post('email');
        $uname = $this->input->post('username');
        $pwd=$this->input->post('pwd');
        $pwdv=$this->input->post('pwdv');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_sama');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('pwdv', 'Password Confirmation', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('signup');
        }
        else{
            $this->user->tambahUser($email,$uname,$pwd);
            $id = $this->user->getInfoUser($email)['id'];
            $this->session->set_userdata('userId',$id);
            redirect($this->config->base_url());
        }
    }
    
    function sama(){
        $email = $this->input->post('email');
        $pwd=$this->input->post('pwd');
        $pwdv=$this->input->post('pwdv');
        if($this->user->isAvailable($email)){
            $this->form_validation->set_message('sama', 'Email yang diinput sudah terdaftar');
            return false;
        }else if($pwd!=$pwdv){
            $this->form_validation->set_message('sama', 'Password berbeda dengan validasi');
            return false;
        }else{
            return true;
        }
    }
}

?>