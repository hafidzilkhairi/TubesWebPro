<?php 
	class artikelc extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('artikel');
	        // if(!$this->session->has_userdata('userId')){
	        //     redirect($this->config->base_url()."login");
	        // }
		}
		function index(){
	        $this->load->view('template/header.php');
	        $query['data']=$this->artikel->get();
	        $this->load->view('v_daftarAC', $query);
	        $this->load->view('template/footer.php');
    	}
    	function tampil(){
    		$x['data']= $this->artikel->getid($_GET['id']);
    		$this->load->view('template/header.php');
	        $this->load->view('v_artikel', $x);
	        $this->load->view('template/footer.php');
    	}
	}
?>