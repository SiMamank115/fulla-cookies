<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
    }
    public function index()
    {
        $this->load->model("Admin_model");
        $this->load->model("Produk_model");
        if ($this->Admin_model->checkSession()) {
            $data["pill"] = 1;
            $data["produk"] = $this->Produk_model->all()->result_array();
            $this->load->view("templates/header");
            $this->load->view("admin/index", $data);
            $this->load->view("templates/footer");
        } else {
            $data["pill"] = 1;
            $this->load->view("templates/header");
            $this->load->view("admin/login", $data);
            $this->load->view("templates/footer");
        }
    }
    public function login()
    {
        $this->load->model("Admin_model");
        if ($this->input->post("submit") && !$this->session->onlog) {
            $username = $this->input->post("name");
            $password = $this->input->post("password");
            $loged = false;
            $invalidName = false;
            $invalidPass = false;
            if (!preg_match('/^\w{2,}$/', $username)) {
                $invalidName = true;
                $this->session->set_flashdata("username", "Nama user invalid!");
            } else if (!preg_match('/^\w{2,}$/', $password)) {
                $invalidPass = true;
                $this->session->set_flashdata("password", "Passrowd user invalid!");
            } else {
                $allAcc = $this->Admin_model->all()->result_array();
                foreach ($allAcc as $a) {
                    if ($username == $a["username"] && password_verify($password, $a["password"])) {
                        $loged = true;
                    }
                }
            }
            if ($loged) {
                $this->session->set_userdata("onlog", password_hash($username, PASSWORD_DEFAULT));
            } else if(!$invalidName && !$invalidPass) {
                $this->session->set_flashdata("password", "Data yang anda kirim tidak cocok dengan satu akun pun!");
            }
        }
        redirect(base_url("admin"));
    }
}
