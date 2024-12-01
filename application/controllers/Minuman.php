<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minuman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Minuman_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Menampilkan daftar minuman
    public function index() {
        $data['minuman'] = $this->Minuman_model->get_all_minuman();
        $data['title'] = 'Daftar Minuman';
        
        $this->load->view('templates/sidebar', $data);
        $this->load->view('minuman/index', $data);
    }

    // Menampilkan form tambah minuman
    public function tambah() {
        $data['title'] = 'Tambah Minuman Baru';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'required|max_length[100]');
        $this->form_validation->set_rules('jenis', 'Jenis', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('alkohol', 'Status Alkohol', 'trim');
        $this->form_validation->set_rules('asal_minuman', 'Asal Minuman', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form jika validasi gagal
            $this->load->view('templates/sidebar', $data);
            $this->load->view('minuman/tambah');
        } else {
            // Proses penyimpanan data
            $this->Minuman_model->tambah_minuman();
            $this->session->set_flashdata('success', 'Minuman berhasil ditambahkan');
            redirect('minuman');
        }
    }

    // Menampilkan form edit minuman
    public function edit($id) {
        $data['minuman'] = $this->Minuman_model->get_minuman_by_id($id);
        
        if (empty($data['minuman'])) {
            show_404();
        }

        $data['title'] = 'Edit Minuman';
        
        // Atur aturan validasi
        $this->form_validation->set_rules('nama_minuman', 'Nama Minuman', 'required|max_length[100]');
        $this->form_validation->set_rules('jenis', 'Jenis', 'trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('alkohol', 'Status Alkohol', 'trim');
        $this->form_validation->set_rules('asal_minuman', 'Asal Minuman', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan form edit
            $this->load->view('templates/sidebar', $data);
            $this->load->view('minuman/edit', $data);
        } else {
            // Proses update data
            $this->Minuman_model->update_minuman($id);
            $this->session->set_flashdata('success', 'Minuman berhasil diupdate');
            redirect('minuman');
        }
    }

    // Hapus minuman
    public function hapus($id) {
        $this->Minuman_model->hapus_minuman($id);
        $this->session->set_flashdata('success', 'Minuman berhasil dihapus');
        redirect('minuman');
    }
}