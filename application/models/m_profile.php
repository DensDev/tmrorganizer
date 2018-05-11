<?php
class M_profile extends CI_Model {
  
 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     
    function list_data(){
        $query = $this->db->get('profil');// mengambil semua data dari tabel profil
         
        return $query->result();// mengembalikan ke controller hasil dari query ke table profil
    }
	
	function input($param){
		$this->db->insert('profil',$param);
		return true;
	}
	
	function getEdit($id){
		$this->db->where('id',$id);
		$query = $this->db->get('profil');
		
		return $query->result();
	}
	
	function edit($param,$id){
		$this->db->where('id',$id);
		$this->db->update('profil',$param);
		return true;
	}
	
	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('profil');
	}
}