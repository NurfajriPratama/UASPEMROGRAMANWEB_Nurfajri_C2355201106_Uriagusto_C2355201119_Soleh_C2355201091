<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dessert extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dessert_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Menampilkan daftar dessert
    public function index() {
        $data['dessert'] = $this->Dessert_model->get_all_dessert();
        $data['title'] = 'Daftar Dessert';
        
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dessert/index', $data);
    }

    // Menampilkan form tambah dessert
    public function tambah() {
        $data['title'] = 'Tambah Dessert Baru';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_dessert', 'Nama Dessert', 'required|max_length[100]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim');
        $this->form_validation->set_rules('bahan_utama', 'Bahan Utama', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form jika validasi gagal
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dessert/tambah');
        } else {
            // Proses penyimpanan data
            $this->Dessert_model->tambah_dessert();
            $this->session->set_flashdata('success', 'Dessert berhasil ditambahkan');
            redirect('dessert');
        }
    }

    // Menampilkan form edit dessert
    public function edit($id) {
        $data['dessert'] = $this->Dessert_model->get_dessert_by_id($id);
        
        if (empty($data['dessert'])) {
            show_404();
        }

        $data['title'] = 'Edit Dessert';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_dessert', 'Nama Dessert', 'required|max_length[100]');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim');
        $this->form_validation->set_rules('bahan_utama', 'Bahan Utama', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form edit
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dessert/edit', $data);
        } else {
            // Proses update data
            $this->Dessert_model->update_dessert($id);
            $this->session->set_flashdata('success', 'Dessert berhasil diupdate');
            redirect('dessert');
        }
    }

    // Hapus dessert
    public function hapus($id) {
        $this->Dessert_model->hapus_dessert($id);
        $this->session->set_flashdata('success', 'Dessert berhasil dihapus');
        redirect('dessert');
    }
}