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
	        $data['x'] = $this->artikel->get();
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
    	$data['judul']=$this->input->post('judul');
    	$data['author']=$this->input->post('author');
    	$data['detail']=$this->input->post('detail');
    	$data['review']=$this->input->post('review');
    	$data['kelebihan']=$this->input->post('kelebihan');
    	$data['kekurangan']=$this->input->post('kekurangan');

        $config['upload_path']          = 'Resource/imgArtikel/';
		$config['allowed_types']        = 'jpg||png';
		$config['max_size']             = 5000;
        // load library upload
		$data['img']= pathinfo($_FILES['gambar']["name"], PATHINFO_EXTENSION);

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $data['result'] = $this->upload->display_errors();
            $this->load->view('v_inputA', $data);
        } else {
        	$this->artikel->insert($data);
        	index();
        }
		}
		function update(){
			$this->load->view();
		}
		function deletedata(){
		$data["id_artikel"]=$this->input->post('id');
		$query=$this->artikel->delete($data);
		redirect('artikelA/index');
		}
	}

?>