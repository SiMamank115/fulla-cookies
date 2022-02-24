<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
        $this->load->model("Admin_model");
        $this->load->model("Produk_model");
    }
    public function index()
    {
        if ($this->Admin_model->checkSession()) {
            $e = $this->session->flashdata("teredit");
            if ($e != null && $e) {
                echo "<script>const teredit = true</script>";
            } else if ($e != null) {
                echo "<script>const teredit = false</script>";
            }
            $e2 = $this->session->flashdata("terhapus");
            if ($e2 != null && $e2) {
                echo "<script>const terhapus = true</script>";
            } else if ($e2 != null) {
                echo "<script>const terhapus = false</script>";
            }
            $data["pill"] = 1;
            if($this->input->post("cari") != null) {
                $data["produk"] = $this->Produk_model->search($this->input->post("cari"))->result_array();
            } else {
                $data["produk"] = $this->Produk_model->all()->result_array();
            }
            $this->load->view("templates/header");
            $this->load->view("admin/index", $data);
            $this->load->view("templates/footer");
        } else {
            $this->Admin_model->loadLogin();
        }
    }
    public function delete()
    {
        if ($this->Admin_model->checksession()) {
            if ($this->input->post("submit") != null) {
                $result = $this->Produk_model->delete($this->input->post("id"));
                $this->session->set_flashdata("terhapus", $result);
            }
            redirect(base_url("admin"));
        } else {
            $this->Admin_model->loadLogin();
        }
    }
    public function edit()
    {
        if ($this->Admin_model->checkSession()) {
            if ($this->input->post("submit") != null) {
                $values = [
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'image-path' => $this->input->post('image_path'),
                ];
                $result = $this->Produk_model->update($values, $this->input->post("id"));
                $this->session->set_flashdata('teredit', $result);
            }
            redirect(base_url("admin"));
        } else {
            $this->Admin_model->loadLogin();
        };
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
            } else if (!$invalidName && !$invalidPass) {
                $this->session->set_flashdata("password", "Data yang anda kirim tidak cocok dengan satu akun pun!");
            }
        }
        redirect(base_url("admin"));
    }
}
