<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="asset/jquery.min.js" type="text/javascript"></script>
  <script src="asset/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="asset/bootstrap.min.css">
  <script type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Welcome | Kuriak Plan</title>
  <script type="text/javascript">
    $(document).ready(function(){
      $('input[type="button"]').click(function(){
        username = ''+$('input[name="username"]').val();
        pass = ''+$('input[name="password"]').val();
        $.getJSON('user.json',function(user){
          var login = false;
          $.each(user,function(i,dia){
            $.each(dia,function(i,saya){
              username1=saya.username;
              pass1=saya.password;
              hafidz = username==username1&&pass==pass1;
              if(username==username1&&pass==pass1){
                login = true;
              }
            });
          });
          if(login==true){
            window.open('index.html','_self');
          }else{
            console.log(login);
            $('.warning').css('display','none');
            $('.warning').slideDown();
          }
        });
      })
    });
  </script>
  <style type="text/css">
  	a {color: black;}
  	a.hover {color: blue;}
  	ul {list-style-type: none;}
  </style>
</head>
<body>
  <!-- Menu Navigasi -->

  <!-- Slide Carousel -->
  <div style="margin-top:10px; background-image: url('<?php echo base_url(); ?>Resource/img/aboutus.jpg');">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
         <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para">Cepat, Terpercaya dan Berkualitas.
         </p>
       </div>
    </div>
  </div>
  </div>
  <div class="container paddingTB60">
	<div class="row">
            <div class="col-md-12">
                <!-- Preview Image -->
                <hr>
                <center>
                <img class="img-fluid"  src="<?php echo base_url(); ?>Resource/img/gmbru.jpg" alt="">
            	</center>
                <hr>
                <hr>
                <!-- Post Content -->
                <p class="lead">Kuriak merupakan perusahaan yang bergerak di bidang layanan jual beli 
                online dan ritel e-commerce.Didirikan pada tahun 2018 oleh orang-orang yang sudah 
                sangat berpengalaman. Perusahaan ini sudah memiliki sistem keamanan yang dapat 
                dipercaya dan karena setiap penjual yang mendaftarkan masuk dagangannya harus 
                membuat kontrak terlebih dahulu sehingga kami mengetahui identitas asli dari 
                si penjual. Selain itu produk-produk akan yang masuk ke website, kami seleksi 
            	terlebih dahulu agar pelanggan tidak merasa kecewa dengan kualitas produk yang kami tawarkan.</p>

                <hr>
            </div>
    </div>
   </div>


<div class="footer-section">
    <div class="footer">
	<div class="container">
		<div class="row">
		<div class="col-md-4 footer-one">
			<h5>About Us </h5>
		    <p>Cepat, Terpercaya dan Berkualitas. perusahaan yang bergerak di bidang layanan 
		    jual beli online dan ritel e-commerce.</p>
		</div>
		<div class="col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul>
									<li><a href="maintenance.html">Maintenance Tips</a></li>
									<li><a href="contact.html">Locations</a></li>
									<li><a href="about.html">Testimonials</a></li>
									<li><a href="about.html">Careers</a></li>
									<li><a href="about.html">Partners</a></li>
								</ul>
		</div>
		<div class="col-md-3 footer-three">
		    <h5>Jasa Pengiriman </h5>
		    <ul>
									<li><a href="hne.co.id">JNE</a></li>
									<li><a href="tiki.co.id">TIKI</a></li>
									<li><a href="sicepat.co.id">SiCepat</a></li>
									<li><a href="zakikamvret.co.id">ZakiTranfer</a></li>
								</ul>
		</div>
		<div class="col-md-2 footer-four">
		    <h5>Metode Pembayaran </h5>
		    <ul>
									<li><a href="">bankZaki</a></li>
									<li><a href="">Mandiri</a></li>
									<li><a href="">E-money</a></li>
									<li><a href="">Visa</a></li>
								</ul>
		</div>

		<div class="clearfix"></div>
	</div>
	</div>
</div>
</div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light footer">
    <span class="copyright">Copyright &copy;2018 Kelompok 4 Tubes WebPro</span>
  </nav>
</body>
</html>
