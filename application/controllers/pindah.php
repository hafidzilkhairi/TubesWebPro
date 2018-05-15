<?php
class pindah extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function con(){
        $this->load->view('template/header');
        $this->load->view('contactus');
        $this->load->view('template/footer');
    }
    function ab(){
        $this->load->view('template/header');
        $this->load->view('aboutus');
        $this->load->view('template/footer');
    }
}

?>