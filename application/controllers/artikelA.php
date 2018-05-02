<?php 
	class artikelA extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('artikel');
			$this->load->helper(array('form', 'url'));
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
    	$id=$this->artikel->getgetan();

        $config['upload_path']          = 'Resource/imgArtikel/';
		$config['allowed_types']        = 'jpg||png';
		$config['max_size']             = 5000;
		$config['file_name']			= $id;
        // load library upload

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload("berkas")) {
            $data['result'] = $this->upload->display_errors();
            echo "<script>alert('".$data['result']."')</script>";
        } else {
        	$this->artikel->insert($data);
        	redirect('artikelA');
        }
		}
		function update(){
			$data['x']=$this->artikel->getid($_GET['id']);
			$this->load->view('template/header.php');
			$this->load->view('v_editA',$data);
			$this->load->view('template/footer.php');
		}

		function updatedata(){
			$data['judul']=$this->input->post('judul');
	    	$data['author']=$this->input->post('author');
	    	$data['detail']=$this->input->post('detail');
	    	$data['review']=$this->input->post('review');
	    	$data['kelebihan']=$this->input->post('kelebihan');
	    	$data['kekurangan']=$this->input->post('kekurangan');
	    	$data['id_artikel']=$this->input->post('id');
	    	$this->artikel->update($data);
	    	redirect('artikelA');
		}

		function deletedata(){
			$data["id_artikel"]=$this->input->post('id');
			$query=$this->artikel->delete($data);
			redirect('artikelA/index');
		}
	}

?> 