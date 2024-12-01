<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Makanan_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Menampilkan daftar makanan
    public function index() {
        $data['makanan'] = $this->Makanan_model->get_all_makanan();
        $data['title'] = 'Daftar Makanan';
        
        $this->load->view('templates/sidebar', $data);
        $this->load->view('makanan/index', $data);
    }

    // Menampilkan form tambah makanan
    public function tambah() {
        $data['title'] = 'Tambah Makanan Baru';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'required|max_length[100]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim');
        $this->form_validation->set_rules('bahan_utama', 'Bahan Utama', 'trim');
        $this->form_validation->set_rules('asal_daerah', 'Asal Daerah', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form jika validasi gagal
            $this->load->view('templates/sidebar', $data);
            $this->load->view('makanan/tambah');
        } else {
            // Proses penyimpanan data
            $this->Makanan_model->tambah_makanan();
            $this->session->set_flashdata('success', 'Makanan berhasil ditambahkan');
            redirect('makanan');
        }
    }

    // Menampilkan form edit makanan
    public function edit($id) {
        $data['makanan'] = $this->Makanan_model->get_makanan_by_id($id);
        
        if (empty($data['makanan'])) {
            show_404();
        }

        $data['title'] = 'Edit Makanan';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_makanan', 'Nama Makanan', 'required|max_length[100]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim');
        $this->form_validation->set_rules('bahan_utama', 'Bahan Utama', 'trim');
        $this->form_validation->set_rules('asal_daerah', 'Asal Daerah', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form edit
            $this->load->view('templates/sidebar', $data);
            $this->load->view('makanan/edit', $data);
        } else {
            // Proses update data
            $this->Makanan_model->update_makanan($id);
            $this->session->set_flashdata('success', 'Makanan berhasil diupdate');
            redirect('makanan');
        }
    }

    // Hapus makanan
    public function hapus($id) {
        $this->Makanan_model->hapus_makanan($id);
        $this->session->set_flashdata('success', 'Makanan berhasil dihapus');
        redirect('makanan');
    }
}