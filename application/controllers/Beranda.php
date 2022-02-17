<?php
class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
    }
    public function index()
    {
        $data["pill"] = 1;
        $this->load->view("templates/header");
        $this->load->view("beranda/index", $data);
        $this->load->view("templates/footer");
    }
    public function admin()
    {
        $this->load->model("Admin_model");
        if ($this->Admin_model->checkSession()) {
            $data["pill"] = 1;
            $this->load->view("templates/header");
            $this->load->view("beranda/admin", $data);
            $this->load->view("templates/footer");
        } else {
            $data["pill"] = 1;
            $this->load->view("templates/header");
            $this->load->view("beranda/login", $data);
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
            if (!preg_match('/^\w{2,}$/', $username)) {
                $this->session->set_flashdata("username", "Invalid Username!");
            } else if (!preg_match('/^\w{2,}$/', $password)) {
                $this->session->set_flashdata("password", "Invalid Password!");
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
            }
        }
        redirect(base_url("beranda/admin"));
    }
}
