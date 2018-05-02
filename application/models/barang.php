<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Model
{

	public function get_data()
	{
		$query = $this->db->order_by('judul','DESC')->get('barang');
		return $query->result();
	}

	public function save_data($data,$maksimum)
	{
		$judul=$data['judul'];
		$deskripsi=$data['deskripsi'];
		$harga=$data['harga'];
		$this->db->query("Insert into barang (idbarang,judul,deskripsi,harga) values($maksimum,'$judul','$deskripsi',$harga)");
    	header('#');
	}
	public function getbarang(){
		return $this->db->query("select * from barang")->result();
	}
	public function delete_data($idbarang){

        $delete=$this->db->query("delete from barang where idbarang=$idbarang");
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    public function edit_data($data,$hafis){
        $judul=$data['judul'];
		$deskripsi=$data['deskripsi'];
		$harga=$data['harga'];
        //$this->db->where('judul', $data['judul']);
        $update = $this->db->query("Update barang set judul='$judul', harga=$harga, deskripsi='$deskripsi' where idbarang=$hafis ;");
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }


}

?>