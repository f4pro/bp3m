<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public $table = 'mahasiswa';
    public $id = 'mahasiswa.id';
    
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('mahasiswa.* , prodi.nama as prodi');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'mahasiswa.prodi = prodi.id');
        $this->db->where('mahasiswa.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
