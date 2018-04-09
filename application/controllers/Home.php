<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

    public function index()
    {
        $data['nama'] = "Trisna Virliana Ramadhanti";
        $this->load->view('home', $data);
        
    }

}/* End of file Controllername.php */
?>