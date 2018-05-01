<?php 
	include "config.php";
	$sql= "SELECT * from artikel where id_artikel='".$_GET['id']."' ";
	$query=mysqli_query($conn, $sql);
	while ($x=mysqli_fetch_array($query)){
 ?>
 	<div class="container" style="background-color: rgba(255, 255, 255, 3);">
 		<div class="container-fluid" style="text-align: center;">
 			<h1><?php echo $x['judul'] ?></h1>
 			<img src="<?php echo $x['img'] ?>">
 		</div>
 		<div class="container-fluid">
 			<h3>Detail Produk</h3>
 			<p><?php echo $x['detail'] ?></p>
 		</div>
 		<div class="container-fluid">
 			<h3>Review</h3>
 			<p><?php echo $x['review'] ?></p>
 		</div>
 		<div class="container-fluid">
 			<h4>Kelebihan : </h4>
 			<p><?php echo $x['kelebihan'] ?></p>
 			<h4>Kekurangan :</h4>
 			<p><?php echo $x['kekurangan'] ?></p>
 		</div>
 		<div class="container-fluid" style="margin-top: 50px">
 			 <p style="float : left"><i class="fa fa-clock-o"></i> <?php echo $x['tgl'] ?></p>
 			<p style="float : right"><?php echo $x['author'] ?></p>
 		</div>
 	</div>
 <?php } ?>