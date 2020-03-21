<?php 
//  berfungsi untuk menuliskan semua code yang berhubungan dengan query
class M_data extends CI_Model{

  // function untuk mengambil keseluruhan baris data dari tabel ikan
	public function tampil_data(){
		return $this->db->get('ikan');
    }
    
    public function tampil_data2(){
      return $this->db->get('admin');
      }
    // method untuk menambah data ke dalam database
    function input_data($data,$table){
      $this->db->insert($table,$data);
      }
    // method untuk menghapus data ke dalam database
    function hapus_data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
    // method untuk mengedit data ke dalam database
    function edit_data($where,$table){		
      return $this->db->get_where($table,$where);
  }
    // method untuk mengupdate data ke dalam database 
    function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
}	
}