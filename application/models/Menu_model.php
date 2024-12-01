<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    // Menetapkan nama tabel secara eksplisit
    protected $table = 'menu';

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua menu
    public function get_all_menu() {
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return []; // Mengembalikan array kosong jika tidak ada data
        }
    }

    // Mendapatkan menu berdasarkan ID
    public function get_menu_by_id($id) {
        $query = $this->db->get_where($this->table, ['id_menu' => $id]);
        if ($query->num_rows() > 0) {
            return $query->row(); // Mengembalikan satu baris jika ditemukan
        } else {
            return null; // Mengembalikan null jika tidak ditemukan
        }
    }

    // Menambahkan menu baru
    public function insert_menu($data) {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id(); // Mengembalikan ID terakhir yang dimasukkan
        } else {
            return false; // Mengembalikan false jika insert gagal
        }
    }

    // Memperbarui data menu
    public function update_menu($id, $data) {
        $this->db->where('id_menu', $id);
        if ($this->db->update($this->table, $data)) {
            return true; // Mengembalikan true jika update berhasil
        } else {
            return false; // Mengembalikan false jika update gagal
        }
    }

    // Menghapus menu
    public function delete_menu($id) {
        $this->db->where('id_menu', $id);
        if ($this->db->delete($this->table)) {
            return true; // Mengembalikan true jika delete berhasil
        } else {
            return false; // Mengembalikan false jika delete gagal
        }
    }
}