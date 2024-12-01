<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation']);
    }
    
    public function index() {
        $data['menu_items'] = $this->menu_model->get_all_menu();
        $data['title'] = 'Daftar Menu';
        
        $this->load->view('templates/sidebar', $data);
        $this->load->view('menu/index', $data);
    }
    
    public function add() {
        $this->form_validation->set_rules('nama_item', 'Nama Item', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Menu Baru';
            
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/tambah');
        } else {
            $data = [
                'nama_item' => $this->input->post('nama_item'),
                'tipe' => $this->input->post('tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'kategori' => $this->input->post('kategori'),
                'bahan_utama' => $this->input->post('bahan_utama'),
                'asal' => $this->input->post('asal'),
                'alkohol' => $this->input->post('alkohol') ? 1 : 0
            ];
            
            $this->menu_model->insert_menu($data);
            $this->session->set_flashdata('success', 'Menu berhasil ditambahkan');
            redirect('menu');
        }
    }
    
    public function edit($id) {
        $this->form_validation->set_rules('nama_item', 'Nama Item', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Edit Menu';
            $data['menu_item'] = $this->menu_model->get_menu_by_id($id);
            
            $this->load->view('templates/sidebar', $data);
            $this->load->view('menu/edit', $data);
        } else {
            $data = [
                'nama_item' => $this->input->post('nama_item'),
                'tipe' => $this->input->post('tipe'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'kategori' => $this->input->post('kategori'),
                'bahan_utama' => $this->input->post('bahan_utama'),
                'asal' => $this->input->post('asal'),
                'alkohol' => $this->input->post('alkohol') ? 1 : 0
            ];
            
            $this->menu_model->update_menu($id, $data);
            $this->session->set_flashdata('success', 'Menu berhasil diperbarui');
            redirect('menu');
        }
    }
    
    public function delete($id) {
        $this->menu_model->delete_menu($id);
        $this->session->set_flashdata('success', 'Menu berhasil dihapus');
        redirect('menu');
    }
}