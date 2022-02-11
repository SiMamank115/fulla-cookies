<?php
class Produk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Produk_model");
    }
    public function index() 
    {  
        $data["list_produk"] = $this->Produk_model->get(6,0)->result_array();
        $data["pill"] = 3;
        $this->load->view("templates/header");
        $this->load->view("produk/index",$data);
        $this->load->view("templates/footer");
    }
    public function detail($id) {
        $data["detail"] = $this->Produk_model->getById($id)->row_array();
        $data["pill"] = 3;
        // var_dump($data["detail"]);
        $this->load->view("templates/header");
        $this->load->view("produk/detail",$data);
        $this->load->view("templates/footer");
    }
}