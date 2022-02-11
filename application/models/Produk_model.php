<?php
class Produk_model extends CI_Model {
    private $table = "produk";
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
}