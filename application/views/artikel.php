<div class="container" style="background-color:white;">
    <div class="row">
    <?php
    foreach($artikel as $key){
        $gambar = $this->db->query('select slug from gambarartikel where id_artikel='.$key['id_artikel'])->result_array()[0]['slug'];
        ?>
            <div class="col-md-3">
                <div>
                    <a href="<?php echo base_url(); ?>artikel/show?id=<?php echo $key['id_artikel'] ?>"><img style="width:100%;height:100%;" src="<?php echo base_url(); ?>asset/artikel/<?php echo $gambar;?>" alt=""></a>
                </div>
            </div>
            <div class="col-md-9">
                <a href="<?php echo base_url(); ?>/artikel/show?id=<?php echo $key['id_artikel'] ?>"><h3><?php echo $key['judul_artikel'];?></h3></a>
                <p  style="overflow-y:hidden;height:100px;text-overflow: ellipsis;text-align: justify;"><?php echo $key['deskripsi_artikel'];?></p>
            </div>
        <?php
    }
    ?>
    </div>
</div>