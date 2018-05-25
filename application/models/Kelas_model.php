<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model 
{

    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('kelas', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('kelas');
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('kelas', $data);
        return $result;       
    }

    public function show($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $query = $this->db->get('kelas');
        return $query->row();
    }   
    
    public function update($id_kelas, $data=[])
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }

    public function delete($id_kelas)
    {
        $this->db->where('id_kelas', $id_kelas);
        $query = $this->db->delete('kelas');
        return $query;
    }

    public function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from kelas where nama_kelas like '%$cari%' ");
		return $data->result();
	}



    
}

/* End Pegawai_model.php */
