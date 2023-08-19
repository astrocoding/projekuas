<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
  public function index() {
    //load models
    $this->load->model('m_mahasiswa');
    $data = array(
      'data_mahasiswa' => $this->m_mahasiswa->get_mahasiswa()->result()
    );
    //load view
    $this->load->view('data_mahasiswa', $data);
  }

  public function tambah() {
    //load view
    $this->load->view('tambah_mahasiswa');
  }

  public function simpan() {
    //load model
    $this->load->model('m_mahasiswa');
    //get data dari form
    $nim = $this->input->post('nim');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $alamat = $this->input->post('alamat');

    $data = array(
      'nim' => $nim,
      'nama_lengkap' => $nama_lengkap,
      'alamat' => $alamat
    );
    //insert data via model
    $this->m_mahasiswa->simpan_mahasiswa($data);
    //redirect ke controller mahasiswa
    redirect('mahasiswa');
  }

  public function edit($id_mahasiswa) {
    //load model
    $this->load->model('m_mahasiswa');
    //get ID dari URL segment ke 3
    $id_mahasiswa = $this->uri->segment(3);
    $data = array(
      'data_mahasiswa' => $this->m_mahasiswa->edit_mahasiswa($id_mahasiswa)
    );
    //load view
    $this->load->view('edit_mahasiswa', $data);
  }

  public function update() {
    //load model
    $this->load->model('m_mahasiswa');
    //get data dari form
    $id_mahasiswa['id_mahasiswa'] = $this->input->post("id_mahasiswa");

    $nim = $this->input->post('nim');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $alamat = $this->input->post('alamat');
    $data = array(
      'nim' => $nim,
      'nama_lengkap' => $nama_lengkap,
      'alamat' => $alamat
    );
    
    //update via model
    $this->m_mahasiswa->update_mahasiswa($data, $id_mahasiswa);
    //redirect ke controller mahasiswa
    redirect('mahasiswa');
  }

  public function hapus($id_mahasiswa) {
    //load model
    $this->load->model('m_mahasiswa');
    //get ID dari URL segment ke 3
    $id['id_mahasiswa'] = $this->uri->segment(3);
    //delete via model
    $this->m_mahasiswa->hapus_mahasiswa($id);
    //redirect ke controller mahasiswa
    redirect('mahasiswa');
  }
}