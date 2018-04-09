<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
 
    public function index()
    {
        $data = array (
                'nama' => "Trisna Virliana Ramadhanti",
                'alamat' => "Politeknik Negeri Malang",
                'email' => "trisnaramadhanti@gmail.com"
                );

        $data["tugas"] = array('Membaca Novel', 'Mendengarkan Musik');
        $this->load->view('home', $data);
        
    }

}/* End of file Controllername.php */
?>