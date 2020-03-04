<?php 
 //berfungsi untuk mengambil data
class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}