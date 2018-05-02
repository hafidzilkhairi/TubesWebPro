<div class="container" style="background:white;">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align:center;"><?php echo $artikel['judul_artikel']; ?></h1>
        </div>
        <div class="col-md-5">
        <img src="<?php echo base_url(); ?>asset/artikel/<?php 
        $this->db->where('id_artikel',$artikel['id_artikel']);
        $gambar = $this->db->get('gambarartikel')->result_array()[0];
        echo $gambar['slug']; ?>" style="height:100%;width:100%;object-fit:cover;" alt="">
        </div>
        <div class="col-md-7">
            <?php echo nl2br($artikel['deskripsi_artikel']); ?>
        </div>
    </div>
</div>