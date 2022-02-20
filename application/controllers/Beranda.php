<?php
class Beranda extends CI_Controller
{
    public function index()
    {
        $data["pill"] = 1;
        $this->load->view("templates/header");
        $this->load->view("beranda/index", $data);
        $this->load->view("templates/footer");
    }
}
