<?php
class Kuriak extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->has_userdata('userId')){
            redirect($this->config->base_url()."login");
        }
    }
    function index(){
        $this->load->view('template/header.php');
        $this->load->view('tampilanUtama');
        $this->load->view('template/footer.php');
    }
}
?>