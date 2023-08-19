<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_mahasiswa extends CI_Model {
  public function get_mahasiswa() {
    //select semua data siswa
    $this->db->select('*');
    $this->db->from('tbl_mahasiswa');
    $this->db->order_by('id_mahasiswa', 'DESC');
    return $this->db->get();
  }

  public function simpan_mahasiswa($data) {
    //insert data
    return $this->db->insert("tbl_mahasiswa", $data);
  }

  public function edit_mahasiswa($id_mahasiswa) {
    //edit data
    $query = $this->db->where("id_mahasiswa", $id_mahasiswa)->get("tbl_mahasiswa");
    return $query->row();
  }

  public function update_mahasiswa($data, $id_mahasiswa) {
    //update siswa
    return $this->db->update("tbl_mahasiswa", $data, $id_mahasiswa);
  }

  public function hapus_mahasiswa($id) {
    //hapus siswa
    return $this->db->delete("tbl_mahasiswa", $id);
  }
}