<?php 
	class artikel extends CI_Model
	{
		function insert($x){
			return $this->db->insert('artikel',$x);
		}	
		function delete($x){
			$this->db->where($x);
			return $this->db->delete('artikel');
		}
		function update($x){
			return $this->db->query("UPDATE artikel set judul='".$x['judul']."', author='".$x['author']."', detail='".$x['detail']."',  review='".$x['review']."', kelebihan='".$x['kelebihan']."', kekurangan='".$x['kekurangan']."', tgl=date('".$tgl."') where id_artikel='".$x['id_artikel']."'");
		}
		function get(){
			return $this->db->get('artikel');
		}
		function gets($str){
			return $this->db->get('artikel',$str)->result_array();
		}
		function getid($x){
			$this->db->where($x['id_artikel']);
			return $this->db->get('artikel');
		}
	}
 ?>