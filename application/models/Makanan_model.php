<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan_model extends CI_Model {

    private $table = 'makanan';

    // Ambil semua data makanan
    public function get_all_makanan() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // Ambil data makanan berdasarkan ID
    public function get_makanan_by_id($id) {
        return $this->db->get_where($this->table, ['id_makanan' => $id])->row();
    }

    // Tambah makanan baru
    public function tambah_makanan() {
        $data = [
            'nama_makanan' => $this->input->post('nama_makanan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('kategori'),
            'bahan_utama' => $this->input->post('bahan_utama'),
            'asal_daerah' => $this->input->post('asal_daerah')
        ];

        return $this->db->insert($this->table, $data);
    }

    // Update makanan
    public function update_makanan($id) {
        $data = [
            'nama_makanan' => $this->input->post('nama_makanan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'kategori' => $this->input->post('kategori'),
            'bahan_utama' => $this->input->post('bahan_utama'),
            'asal_daerah' => $this->input->post('asal_daerah')
        ];

        $this->db->where('id_makanan', $id);
        return $this->db->update($this->table, $data);
    }

    // Hapus makanan
    public function hapus_makanan($id) {
        return $this->db->delete($this->table, ['id_makanan' => $id]);
    }
}