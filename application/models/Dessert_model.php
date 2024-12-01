<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dessert_model extends CI_Model {

    private $table = 'dessert';

    // Ambil semua data dessert
    public function get_all_dessert() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Ambil data dessert berdasarkan ID
    public function get_dessert_by_id($id) {
        return $this->db->get_where($this->table, ['id_dessert' => $id])->row();
    }

    // Tambah dessert baru
    public function tambah_dessert() {
        $data = [
            'nama_dessert' => $this->input->post('nama_dessert'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('kategori'),
            'bahan_utama' => $this->input->post('bahan_utama')
        ];

        return $this->db->insert($this->table, $data);
    }

    // Update dessert
    public function update_dessert($id) {
        $data = [
            'nama_dessert' => $this->input->post('nama_dessert'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('kategori'),
            'bahan_utama' => $this->input->post('bahan_utama')
        ];

        $this->db->where('id_dessert', $id);
        return $this->db->update($this->table, $data);
    }

    // Hapus dessert
    public function hapus_dessert($id) {
        return $this->db->delete($this->table, ['id_dessert' => $id]);
    }
}