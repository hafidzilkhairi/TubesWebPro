<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function index(){
        if(!$this->session->has_userdata('userId')){
            $this->load->view('login');
        }else{
            redirect('http://127.0.0.1/TubesWebpro/');
        }
    }
    function action(){
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_sama');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
            unset($_SESSION['userAdminId']);
            $this->session->set_userdata('userId',$this->user->getInfoUser($email)['id_user']);
            redirect($this->config->base_url());
        }
    }
    function sama(){
        if(isset($_POST['email'])){
            $email = $this->input->post('email');
            $pwd = $this->input->post('pwd');
            if($this->user->validasiUser($email,$pwd)){
                return true;
            }else{
                if($_POST['email']==''){
                    $this->form_validation->set_message('sama','The Email field is required.');
                }else
                    $this->form_validation->set_message('sama','Maaf email tidak terdaftar');
                return $this->user->validasiUser($email,$pwd);
            }
        }else{
            $this->form_validation->set_message('sama','The Email field is required.');
            return false;
        }
    }
}

?>