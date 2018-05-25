<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function _construct()
    {
        parent::_construct;
        //$this->load->model('biodata');
    }
 
    public function index()
    {
        $this->load->view('home');       
    }

}/* End of file Controllername.php */
?>