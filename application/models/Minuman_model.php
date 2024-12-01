<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minuman_model extends CI_Model {

    private $table = 'minuman';

    // Ambil semua data minuman
    public function get_all_minuman() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Ambil data minuman berdasarkan ID
    public function get_minuman_by_id($id) {
        return $this->db->get_where($this->table, ['id_minuman' => $id])->row();
    }

    // Tambah minuman baru
    public function tambah_minuman() {
        $data = [
            'nama_minuman' => $this->input->post('nama_minuman'),
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga'),
            'alkohol' => $this->input->post('alkohol') ? 1 : 0,
            'asal_minuman' => $this->input->post('asal_minuman')
        ];

        return $this->db->insert($this->table, $data);
    }

    // Update minuman
    public function update_minuman($id) {
        $data = [
            'nama_minuman' => $this->input->post('nama_minuman'),
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga'),
            'alkohol' => $this->input->post('alkohol') ? 1 : 0,
            'asal_minuman' => $this->input->post('asal_minuman')
        ];

        $this->db->where('id_minuman', $id);
        return $this->db->update($this->table, $data);
    }

    // Hapus minuman
    public function hapus_minuman($id) {
        return $this->db->delete($this->table, ['id_minuman' => $id]);
    }
}