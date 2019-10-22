<?php

class Kerudung extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kerudung_model');
        $this->load->library('form_validation');
      
    }

    public function index()
    {
        
        $data['judul'] = 'Daftar Kerudung';
        $data['kerudung'] = $this->Kerudung_model->getAllKerudung();
        if($this->input->post('keyword')){
            $data['kerudung']= $this->Kerudung_model->cariDataKerudung();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('kerudung/index', $data);
        $this->load->view('templates/footer');

    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Data Kerudung';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('bahan', 'Bahan', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
       



        if($this->form_validation->run() == FALSE ){
        $this->load->view('templates/header', $data);
        $this->load->view('kerudung/tambah');
        $this->load->view('templates/footer');
        } else
        {

       $this->Kerudung_model->tambahDataKerudung();
       $this->session->set_flashdata('flash', 'Ditambahkan');
       redirect('kerudung');
       
        }
    }   

    public function hapus($id){
        $this->Kerudung_model->hapusDataKerudung($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kerudung'); 
    }

    public function detail($id){
        $data['judul'] = 'Detail Data Kerudung';
          $data['kerudung'] = $this->Kerudung_model->getKerudungById($id);
        $this->load->view('templates/header',$data);
        
        $this->load->view('kerudung/detail',$data);
        
        $this->load->view('templates/footer');
        }




     public function ubah($id){
        $data['judul'] = 'Form Tambah Data Kerudung';
        $data['kerudung'] = $this->Kerudung_model->getKerudungById($id);
        $data['ukuran'] = ['S','M', 'L', 'XL', 'XXL'];
 
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('bahan', 'Bahan', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
       



        if($this->form_validation->run() == FALSE ){
        $this->load->view('templates/header', $data);
        $this->load->view('kerudung/ubah',$data);
        $this->load->view('templates/footer');
        } else
        {

       $this->Kerudung_model->ubahDataKerudung();
       $this->session->set_flashdata('flash', 'Diubah');
       redirect('kerudung');
       
        }
    }   



   
}