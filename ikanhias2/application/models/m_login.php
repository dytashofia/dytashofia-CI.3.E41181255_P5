<?php 
 // Model ini dibuat untuk memeriksa dan melanjutkan apakah terdapat data pada tabel admin sebagai login
class M_login extends CI_Model{
		
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}