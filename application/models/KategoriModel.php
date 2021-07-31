<?php

class KategoriModel extends CI_Model
{



 public function get_all_kategori()
 {
  $query = "SELECT * FROM kategori";
  return $this->db->query($query)->result_array();
 }
}
