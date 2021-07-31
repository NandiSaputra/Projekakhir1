<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('KategoriModel');
	}
	
	
	public function index()
	{
		$data['Allkategori'] = $this->KategoriModel->get_all_kategori();
		$data['title'] ="Daftar Kategori";

		$this->load->view('templates/header',$data);
		$this->load->view('kategori/index');
		$this->load->view('templates/footer');
	}

 public function create()
 {
  $data['title'] = "Daftar Kategori";
  $this->load->view('templates/header', $data);
  $this->load->view('kategori/create');
  $this->load->view('templates/footer');
 }
 public function simpankategori()
 {
  $data = [
   'kategori' => $this->input->post('kategori'),
  ];
  $this->db->insert('kategori', $data);
  redirect('kategori');
}
 public function edit($id_kategori)
 {

  $data['title'] = "Edit Kategori";
  $data['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array();

  $this->load->view('templates/header', $data);
  $this->load->view('kategori/edit', $data);
  $this->load->view('templates/footer');
 }
 public function editkategori()
 {

  $this->db->set('kategori', $this->input->post('kategori'));
  $this->db->where('id_kategori', $this->input->post('id_kategori'));
  $this->db->update('kategori');
  redirect('kategori');
 }
 public function hapus($id_kategori)
 {


  $this->db->where('id_kategori', $id_kategori);
  $this->db->delete('kategori');


  redirect('kategori');
 }

}