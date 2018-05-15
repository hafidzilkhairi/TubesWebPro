<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?php echo $this->config->base_url(); ?>Resource/javascript/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>Resource/javascript/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->config->base_url(); ?>Resource/javascript/privatejs.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
	crossorigin="anonymous">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo $this->config->base_url(); ?>Resource/css/style.css">
	<title>Welcome | Kuriak Plan</title>
	<script type="text/javascript"></script>
</head>

<body>
	<!-- Menu Navigasi -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
		<a class="navbar-brand" href="<?php echo base_url(); ?>">KURIAK</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
		aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>aboutus">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>contactus">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>artikel">Artikel</a>
				</li>
				<li class="nav navbar-nav navbar-right">
				<div class="dropdown">
					<button class="float-right btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
						Login As <?php $this->db->where('id_user',$_SESSION['userId']); echo $this->db->get('user')->result_array()[0]['username']; ?>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo base_url(); ?>keranjang">Keranjang<sup><?php
						$jumlah = $this->db->query('select count(*) from keranjang where id_user='.$_SESSION['userId']);
						if($jumlah->num_rows()>0){
							$jumlahnya = $jumlah->result_array()[0]['count(*)'];
						}else{
							$jumlahnya = 0;
						}
						echo $jumlahnya;
						?></sup></a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
					</div>
				</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="navbar-fixed-clear">
	</div>
