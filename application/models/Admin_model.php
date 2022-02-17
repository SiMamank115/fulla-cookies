<?php
class Admin_model extends CI_Model {
    private $table = "admin";
    public function all () 
    {
        return $this->db->get($this->table);
    }
    public function get($limit = 0,$start = 0)
    {
        return $this->db->get($this->table,$limit,$start);
    }
    public function getById($id = 1)
    {
        return $this->db->get_where($this->table,array("id" => $id));
    }
    public function checkSession() {
        $this->load->library("session");
        if($this->session->onlog) {
            $allAcc = $this->all()->result_array();
            foreach ($allAcc as $a) {
                if (password_verify($a["username"],$this->session->onlog)) {
                    return true;
                }
            }
        }
        $this->session->unset_userdata('onlog');
        return false;
    }
}