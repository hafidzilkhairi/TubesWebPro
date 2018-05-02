<?php
class Artikel extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['artikel']=$this->db->query('select * from artikel')->result_array();
        $this->load->view('template/header');
        $this->load->view('artikel',$data);
        $this->load->view('template/footer');
    }
    function show(){
        if(isset($_GET['id'])){
            $this->db->where('id_artikel',$_GET['id']);
            $query = $this->db->get('artikel');
            if($query->num_rows()>0){
                $data['artikel'] = $query->result_array()[0];
                $this->load->view('template/header');
                $this->load->view('singleartikel',$data);
                $this->load->view('template/footer');
            }else{
                redirect(base_url().'artikel');;
            }
        }else{
            redirect(base_url().'artikel');;
        }
    }
}

?>