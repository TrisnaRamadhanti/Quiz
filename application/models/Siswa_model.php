<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model 
{

    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('Siswa', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('Siswa');
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('siswa', $data);
        return $result;       
    }

    public function show($NIS)
    {
        $this->db->where('NIS', $NIS);
        $query = $this->db->get('siswa');
        return $query->row();
    }   
    
    public function update($NIS, $data=[])
    {
        $this->db->where('NIS', $NIS);
        $this->db->update('siswa', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }

    public function delete($NIS)
    {
        $this->db->where('NIS', $NIS);
        $query = $this->db->delete('siswa');
        return $query;
    }

    public function nama_kelas()
    {
        $query = $this->db->get('kelas');
        return $query->result();
    }

    public function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		//$data = $this->db->query("SELECT * from siswa where nama like '%$cari%' ");
        //return $data->result();
        
            $this->db->select('*');
			$this->db->from('siswa');
			$this->db->like('nama',$cari);
            $this->db->or_like('alamat',$cari);
            $this->db->or_like('umur',$cari);
			return $this->db->get()->result();
	}




    
}
