<?php
class pindah extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['artikel']=$this->db->query('select * from artikel')->result_array();
        $this->load->view('template/header');
        $this->load->view('artikel',$data);
        $this->load->view('template/footer');
    }
    function con(){
        $this->load->view('template/header');
        $this->load->view('contactus',$data);
        $this->load->view('template/footer');
    }
    function con(){
        $this->load->view('template/header');
        $this->load->view('aboutus',$data);
        $this->load->view('template/footer');
    }
}

?>