<?php
class Produk_model extends CI_Model
{
    private $table = "produk";
    public function all()
    {
        return $this->db->get($this->table);
    }
    public function search($keyword = '') {
        $this->db->like(array('nama' => $keyword));
        return $this->db->get($this->table);
    }
    public function get($limit = 0, $start = 0)
    {
        return $this->db->get($this->table, $limit, $start);
    }
    public function getById($id = 1)
    {
        return $this->db->get_where($this->table, array("id" => $id));
    }
    public function update($val = array(), $id)
    {
        $this->db->set('nama', $val['nama']);
        $this->db->set('deskripsi', $val['deskripsi']);
        $this->db->set('harga', $val['harga']);
        $this->db->set('image-path', $val['image-path']);
        $this->db->where('id', $id);
        return $this->db->update($this->table);
    }
    public function delete($id) {
        return $this->db->delete($this->table,array('id' => $id));
    }
}
