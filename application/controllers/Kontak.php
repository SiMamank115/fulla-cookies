<?php
class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
    public function index()
    {
        $data["pill"] = 4;
        $this->load->helper("form");
        $this->load->view("templates/header");
        $this->load->view("kontak/index", $data);
        $this->load->view("templates/footer");
        $e = $this->session->flashdata("terkirim");
        if (isset($e) && $e) {
            echo "<script>const terkirim = true</script>";
        } else if (isset($e)) {
            echo "<script>const terkirim = false</script>";
        }
    }
    public function send()
    {
        if ($this->input->post("submit")) {
            $ip = curl_init();
            curl_setopt_array($ip, array(CURLOPT_URL => "https://ipinfo.io?token=6f5c214ada048e", CURLOPT_RETURNTRANSFER => true));
            $user_ip = json_decode(curl_exec($ip), TRUE)["ip"];
            curl_close($ip);
            $nama = $this->input->post("nama");
            $email = $this->input->post("email");
            $nomor = $this->input->post("nomor");
            $pesan = $this->input->post("pesan");
            $text = "<b>Fulla Cookies contact</b>\n\nip : <b>$user_ip</b>\nnama : <b>$nama</b>\nemail : <b>$email</b>\nnomer : <b>$nomor</b>\npesan : \n\n<b>$pesan</b>";
            $url = "https://api.telegram.org/bot5242312802%3AAAGeWwofFXLFf2b64v_FzqQNkx2TfxVRsDs/sendMessage?parse_mode=HTML&chat_id=@fullacontact";
            $url = $url . "&text=" . urlencode($text);
            $send = curl_init();
            curl_setopt_array($send, [CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true]);
            $result = json_decode(curl_exec($send), TRUE);
            curl_close($send);
            if ($result["ok"]) {
                $this->session->set_flashdata("terkirim", true);
            } else {
                $this->session->set_flashdata("terkirim", false);
            }
            redirect(base_url("kontak"));
        }
    }
}
