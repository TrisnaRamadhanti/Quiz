<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function index($jumlahBerita)
    {
        $data = array ();
        $data['jumlahBerita'] = $jumlahBerita;
        $this->load->view('news', $data);
        
    }

}

/* End of file Controllername.php */


?>