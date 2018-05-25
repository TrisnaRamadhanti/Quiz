<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data = [];
            $total = $this->Kelas_model->getTotal();
    
            if ($total > 0) {
                $limit = 3;
                $start = $this->uri->segment(3, 0);
    
                $config = [
                    'base_url' => base_url() . 'kelas/index',
                    'total_rows' => $total,
                    'per_page' => $limit,
                    'uri_segment' => 3,
    
                    // Bootstrap 3 Pagination
                    'first_link' => 'First',
                    'last_link' => 'Last',
                    'next_link' => 'Next',
                    'prev_link' => 'Prev',
                    'full_tag_open' => '<ul class="pagination">',
                    'full_tag_close' => '</ul>',
                    'num_tag_open' => '<li>',
                    'num_tag_close' => '</li>',
                    'cur_tag_open' => '<li class="active"><span>',
                    'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                    'next_tag_open' => '<li>',
                    'next_tag_close' => '</li>',
                    'prev_tag_open' => '<li>',
                    'prev_tag_close' => '</li>',
                    'first_tag_open' => '<li>',
                    'first_tag_close' => '</li>',
                    'last_tag_open' => '<li>',
                    'last_tag_close' => '</li>',
                ];
                $this->pagination->initialize($config);
                         
    
                $data = [
                   'results' => $this->Kelas_model->list($limit, $start),
                    'links' => $this->pagination->create_links()
                ];
            }
    
            $this->load->view('kelas/index', $data);
    }

    public function create()
    {
        $this->load->view('kelas/create');
    }

   public function tambah()
   {
         $data = array(
        'id_kelas' => $this->input->post('id_jurusan'),
        'nama_kelas'=>$this->input->post('nama')
        );
     
        $perintah = $this->Kelas_model->insert($data);

        if($perintah)
        {
            redirect('Kelas');
        }
        else
        {
            redirect('Kelas/tambah');
        }
   }

   public function show($id_kelas)
   {
           $kelas = $this->Kelas_model->show($id_kelas);
           $data = ['data' => $kelas];
           $this->load->view('kelas/show', $data);        
   }

   public function edit($id_kelas)
   {
           $kelas = $this->Kelas_model->show($id_kelas);
           $data = [
           'data' => $kelas, 
           'error' => ''
           ];
           $this->load->view('kelas/edit', $data);
       
   }

   public function update($id_kelas)
    {
        $id_kelas = $this->input->post('id_kelas');

        $data = array(
            'nama_kelas'=>$this->input->post('nama_kelas')
        );
     
        $perintah = $this->Kelas_model->update($id_kelas, $data);

        if($perintah)
        {
            redirect('kelas');
        }
            else
        {
            redirect('kelas/edit');
        }
    }

    public function hapus($id_kelas)
    {
        $kelas = $this->Kelas_model->delete($id_kelas);
        redirect('kelas');
    }

    public function cariData()
    {
        $data = [
            'cari' => $this->Kelas_model->cari()
         ];
        
		$this->load->view('kelas/cari', $data);
    }

}

