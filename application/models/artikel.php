<?php 
	class artikel extends CI_Model
	{
		function insert($x){
<<<<<<< HEAD
			return $this->db->insert('artikel',$x);
=======
			$kod=$this->db->query("SELECT max(id_artikel) as kode from artikel")->row();
			$ko=substr($kod->kode,1,4);
			$t=$ko+1;
			if ($t<10) $id='A000'.$t;
			else $id='A00'.$t;
			// cari tanggal
			$tgl=date("Y-m-d");

			return $this->db->query("INSERT into artikel (id_artikel, judul, author, tgl, detail, review, kelebihan, kekurangan) values ('".$id."', '".$x['judul']."', '".$x['author']."', DATE ('".$tgl."'), '".$x['detail']."', '".$x['review']."', '".$x['kelebihan']."', '".$x['kekurangan']."')");
>>>>>>> 1d2106d4df55a24692603bff1c9a1ce934fef2d5
		}	
		function delete($x){
			$this->db->where('id_artikel',$x['id']);
			return $this->db->delete('artikel');
		}
		function update($x){
			$tgl=date("Y-m-d");
			return $this->db->query("UPDATE artikel set judul='".$x['judul']."', author='".$x['author']."', detail='".$x['detail']."',  review='".$x['review']."', kelebihan='".$x['kelebihan']."', kekurangan='".$x['kekurangan']."', tgl=date('".$tgl."') where id_artikel='".$x['id_artikel']."'");
		}
		function get(){
			return $this->db->get('artikel');
		}
		function gets($str){
			return $this->db->get('artikel',$str)->result_array();
		}
		function getid($x){
			return $this->db->query("SELECT * from artikel where id_artikel='".$x."'")->result_array();
		}
		function getgetan(){
			$kod=$this->db->query("SELECT max(id_artikel) as kode from artikel")->row();
			$ko=substr($kod->kode,1,4);
			$t=$ko+1;
			if ($t<10) return $id='A000'.$t;
			else return $id='A00'.$t; 
		}
	}
 ?>