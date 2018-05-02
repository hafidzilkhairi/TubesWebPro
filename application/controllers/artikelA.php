<?php 
	class artikelA extends CI_Controller
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
	        $data = $this->artikel->get();
	        $this->load->view('v_daftarAA', $data);
	        $this->load->view('template/footer.php');
    	}
    	function input(){
    		$this->load->view('template/header.php');
    		$this->load->view('v_inputA');
    		$this->load->view('template/footer.php');
    	}
    	function inputdata() {
			// setting konfigurasi upload
			$config['upload_path']          = './imgArtikel/';
			$config['allowed_types']        = 'jpg||png';
			$config['max_size']             = 5000;
			// load library upload
			$data['namabarang']=

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$data['result'] = $this->upload->display_errors();
				$this->load->view('v_upload', $data);
			}
		}
	}
?>