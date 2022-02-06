<?php
class Kontak extends CI_Controller {
    public function index() 
    {
        $data["pill"] = 4;
        $this->load->view("templates/header");
        $this->load->view("kontak/index",$data);
        $this->load->view("templates/footer");
    }
}