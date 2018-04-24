<?php

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('user');
    }
    function kelolaUser($halaman = 1){
        $this->load->view('admin/template/header');
        $data['user']=$this->user->getUser($halaman);
        $this->load->view('admin/kelolaUser',$data);
        $this->load->view('template/footer');
    }
    
    public function index(){
        $this->load->view('admin/template/header');
        $data['user']=$this->user->getUser(1);
        $this->load->view('admin/kelolaUser',$data);
        $this->load->view('template/footer');
    }
    public function action(){
        if($this->input->post('signup')){
            redirect($this->config->base_url().'signup');
        }
    }
}

?>