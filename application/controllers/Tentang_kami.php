<?php
class Tentang_kami extends CI_Controller {
    public function index() 
    {
        $data["pill"] = 2;
        $this->load->view("templates/header");
        $this->load->view("tentang_kami/index",$data);
        $this->load->view("templates/footer");
    }
}