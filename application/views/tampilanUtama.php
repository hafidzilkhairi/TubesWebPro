<!-- Slide Carousel -->
<div class="container">
	<div id="myCarousel" class="carousel slide carousel1" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
		</ol>
		<div class="carousel-inner carousel1">
			<div class="carousel-item active">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\3.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\4.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\5.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\6.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\7.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 carousel1" src="<?php echo $this->config->base_url();?>Resource\img\slide\8.jpg" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>






</div>
<div class="container content-wrapper">
	<div class="row">
  <?php foreach($barang as $key){
    $this->db->where('id_barang',$key['id_barang']);
    $gambar = $this->db->get('gambarbarang')->result_array()[0];

  ?>
  <div class="col-lg-3 produk">
    <div class="card" style="width: 100%;height:500px;">
		<a style="text-decoration:none;color:black;" href="<?php echo base_url(); ?>barang/<?php echo $key['id_barang'];?>"><img style="max-height:272px;object-fit:cover;" class="card-img-top" src="<?php echo $this->config->base_url();?>asset\barang\<?php echo $gambar['slug']; ?>" alt="Card image cap"></a>
      <div class="card-body">
        <a style="text-decoration:none;color:black;" href="<?php echo base_url(); ?>barang/<?php echo $key['id_barang'];?>"><h5 class="card-title" style="height:24px;overflow:hidden;text-overflow: ellipsis;"><?php echo $key['nama_barang'];?></h5>
        <p class="card-text" style="overflow:hidden;height:100px;"><?php echo nl2br($key['deskripsi_barang']); ?></p>
        <a href="<?php echo base_url(); ?>barang/<?php echo $key['id_barang'];?>" class="btn btn-primary">Buy</a></a>
      </div>
    </div>
  </div>
  <?php
  }
  
  ?>
	</div>
</div>
