<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all()
  {
    $this->db->select('*');
    $this->db->from('gallery');
    return $this->db->get()->result();
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('gallery')->row();
  }

  public function insert($data)
  {
    $this->db->insert('gallery', $data);
  }

  public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('gallery', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('gallery');
  }

}
