<?php
$this->db->where('id_barang',$barang['id_barang']);
$sad = $this->db->get('gambarbarang');
if($sad->num_rows()>0){
    $query = $sad->result_array()[0];
}else{
    $query = $sad->result_array();
}
?>
<div class="container content-wrapper" style="background:white;">
    <div class="row">
        <div class="col-md-3"><img class="img-fluid" src="<?php echo base_url(); ?>asset\barang\<?php echo $query['slug']; ?>" alt="">
            <a href="<?php echo base_url(); ?>beli/<?php echo $barang['id_barang']; ?>"><button type="button" class="btn btn-success">Beli!</button></a>
        </div>
      <div class="col-md-9 kontenProduk">
        <div class="row">
          <div class="col-md-9"><h1><?php echo $barang['nama_barang']; ?></h1></div>
          <div class="col-md-3"><h3>Rp. <?php echo $barang['harga_barang']; ?><h3></div>
        </div>
        <p>
        <?php echo nl2br($barang['deskripsi_barang']); ?>
        </p>
      </div>
      <div class="col-md-3"></div>
      <div class="col-md-9">    
      <hr></div>
    </div>


    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-9">
        <div id="komen" class="row">
            <?php
            $this->db->where('id_barang',$barang['id_barang']);
            $data = $this->db->get('komenartikel')->result_array();
            foreach($data as $key){
                $this->db->where('id_user',$key['id_user']);
                $user = $this->db->get('user','username')->result_array()[0];
                ?>
                <p id="komen1" class="col-md-9 komen">
                    <?php
                    $this->db->where('id_user',$_SESSION['userId']);
                    $saya = $this->db->get('user','status_user')->result_array()[0]['status_user'];
                    if($saya == '1'){
                        ?>
                        <a href="<?php echo base_url(); ?>komentar/hapuskomentar/<?php echo $key['id_komen']; ?>?id=<?php echo $barang['id_barang']; ?>"><i class="fa fa-trash"></i></a>
                        <?php
                    }
                    ?>
                    <b id="namaKomen1"><?php echo $user['username']; ?></b>
                    <span id="isikomen1"><?php echo nl2br($key['isi_komen']); ?></span>
                </p>
                <?php
            }
            ?>
        </div>

        <form method="post" action="<?php echo base_url(); ?>komentar/tambahkomentar/<?php echo $barang['id_barang']; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Comment : </label>
            <textarea name="isiKomen" id="isiKomen" type="text" class="form-control" placeholder="Masukkan Komentar Anda"></textarea>
          </div>
          <button id="submitKomen" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>