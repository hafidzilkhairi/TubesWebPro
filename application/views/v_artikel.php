 	<?php if(isset($data)){
 			foreach ($data as $data){
 	 ?>
 	<div class="container" style="background-color: rgba(255, 255, 255, 0.3); margin-top: 30px; border-radius: 10px;">
 		<div class="container-fluid" style="text-align: center;">
 			<h1><?php echo $data['judul'] ?></h1>
 			<img src="Resource/imgArtikel/<?php echo $data['id_artikel'] ?>.jpg" width="400">
 		</div>
 		<div class="container-fluid">
 			<h3>Detail Produk</h3>
 			<p><?php echo $data['detail'] ?></p>
 		</div>
 		<div class="container-fluid">
 			<h3>Review</h3>
 			<p><?php echo $data['review'] ?></p>
 		</div>
 		<div class="container-fluid">
 			<h4>Kelebihan : </h4>
 			<p><?php echo $data['kelebihan'] ?></p>
 			<h4>Kekurangan :</h4>
 			<p><?php echo $data['kekurangan'] ?></p>
 		</div>
 		<div class="container-fluid" style="margin-top: 50px; padding: 30px;">
 			 <p style="float : left"><i class="fa fa-clock-o"></i> <?php echo $data['tgl'] ?></p>
 			<p style="float : right"><?php echo $data['author'] ?></p>
 		</div>
 	</div>
 	<?php }} ?>
