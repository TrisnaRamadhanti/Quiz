<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('Siswa_model');
    }

    public function index()
    {
  

        $data = [];
            $total = $this->Siswa_model->getTotal();
    
            if ($total > 0) {
                $limit = 2;
                $start = $this->uri->segment(3, 0);

    
                $config = [
                    'base_url' => base_url() . 'Siswa/index',
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
                   'results' => $this->Siswa_model->list($limit, $start),
                   'Kelas'=> $this->Siswa_model->nama_kelas(),
                    'links' => $this->pagination->create_links()
                ];
            }
    
            $this->load->view('Siswa/index', $data);
    }

    public function create()
    {
        $data = [
            'Kelas'=> $this->Siswa_model->nama_kelas()
         ];
        $this->load->view('siswa/create', $data);
    }

   public function tambah()
   {
         $data = array(
        'NIS' => $this->input->post('NIS'),
        'nama'=>$this->input->post('namalengkap'),
        'umur'=>$this->input->post('umur'),
        'alamat'=>$this->input->post('alamat'),
        'nama'=>$this->input->post('namalengkap'),
        'no_telpn'=>$this->input->post('kontak'),
        'kode_jurusan'=>$this->input->post('kode_kelas'),
        );
     
        $perintah = $this->Siswa_model->insert($data);

        if($perintah)
        {
            redirect('Siswa');
        }
        else
        {
            redirect('Siswa/create');
        }
   }

   public function show($NIS)
   {
           $siswa = $this->Siswa_model->show($NIS);
           $kelas = $this->Siswa_model->nama_kelas();
           $data = [
               'data' => $siswa,
               'kelas' => $kelas
            ];
           $this->load->view('siswa/show', $data);        
   }

   public function edit($NIS)
   {
           $siswa = $this->Siswa_model->show($NIS);
           $kelas = $this->Siswa_model->nama_kelas();
           $data = [
           'data' => $siswa, 
           'kelas' => $kelas,
           'error' => ''
           ];
           $this->load->view('siswa/edit', $data);
       
   }

   public function update($NIS)
    {
        $NIS = $this->input->post('NIS');

        $data = array(
            'nama'=>$this->input->post('namalengkap'),
            'umur'=>$this->input->post('umur'),
            'alamat'=>$this->input->post('alamat'),
            'nama'=>$this->input->post('namalengkap'),
            'no_telpn'=>$this->input->post('kontak'),
            'kode_jurusan'=>$this->input->post('kode_jurusan'),
            );
     
        $perintah = $this->Siswa_model->update($NIS, $data);

        if($perintah)
        {
            redirect('siswa');
        }
            else
        {
            redirect('siswa/edit');
        }
    }

    public function hapus($NIS)
    {
        $kelas = $this->Siswa_model->delete($NIS);
        redirect('siswa');
    }

    public function cariData()
    {
        $data = [
            'Kelas'=> $this->Siswa_model->nama_kelas(),
            'cari' => $this->Siswa_model->cari()
         ];
        
		$this->load->view('siswa/cari', $data);
    }

}

