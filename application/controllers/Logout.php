<?php
class Logout extends CI_Controller{
    function index(){
        session_destroy();
        redirect($this->config->base_url());
    }
}

?>