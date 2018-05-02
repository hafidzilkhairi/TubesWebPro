<?php 
	class artikel extends CI_Model
	{
		function insert($x){
			$kode=mysqli_query($conn, 'select max(id_artikel) as kode from artikel');
			$kod=mysqli_fetch_array($kode);
			$ko=substr($kod['kode'],1,4);
			$t=$ko+1;
			if ($t<10) $id='A000'.$t;
			else $id='A00'.$t;
			// cari tanggal
			$tgl=date("Y-m-d");

			return $this->db->query("INSERT into artikel (id_artikel, judul, author, tgl, detail, review, kelebihan, kekurangan,img) values ('".$id."', '".$x['judul']."', '".$x['author']."', DATE ('".$tgl."'), '".$x['detail']."', '".$x['review']."', '".$x['kelebihan']."', '".$x['kekurangan']."')");
		}	
		function delete($x){
			$this->db->where($x);
			return $this->db->delete('artikel');
		}
		function update($x){
			return $this->db->query("UPDATE artikel set judul='".$x['judul']."', author='".$x['author']."', detail='".$x['detail']."',  review='".$x['review']."', kelebihan='".$x['kelebihan']."', kekurangan='".$x['kekurangan']."', tgl=date('".$tgl."') where id_artikel='".$x['id_artikel']."'");
		}
		function get(){
			return $this->db->get('artikel')->result_array();
		}
		function getid($x){
			$this->db->where($x['id_artikel']);
			return $this->db->get('artikel');
		}
	}
 ?>