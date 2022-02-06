<?php
class Produk extends CI_Controller {
    public function index() 
    {
        $data["pill"] = 3;
        $this->load->view("templates/header");
        $this->load->view("produk/index",$data);
        $this->load->view("templates/footer");
    }
}