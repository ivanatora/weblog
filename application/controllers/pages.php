<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    public function index(){
        $this->load->view("include/header.php");
        $this->load->view("pages/index");
        $this->load->view("include/footer.php");
    }
}

?>