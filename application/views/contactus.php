<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="asset/jquery.min.js" type="text/javascript"></script>
  <script src="asset/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="asset/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
    input{width: 49%}
    textarea{width: 99%;height:250px;}
    #gambirr1{
      width: 100%;
      height: 100%;
    }
    #okejek.okejek img{
    	width: 100%;
    	height: 100%;
    }
    body{
    	min-height: 90vh;
    }
    #td1 {margin-right: 5px}
  </style>
</head>
<body>
  <!-- Menu Navigasi -->

<!-- Slide Carousel -->
  <div  class="okejek"; style="background-image: url('<?php echo base_url(); ?>Resource/img/bisnis.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="lg-text" style="color: white">Contact Us</h1>
          <p style="color: white">Hubungi Kami.
          </p>
          <br/>
          <br/>
        </div>
      </div>
    </div>
  </div> 
  <br/>
    <div class="container paddingTB60" style="background-color: rgba(220,220,220,.8); border-radius: 5px";>
      <hr>
      <div class="row">
          <div class="col-md-4">
            <ul>
              <li>Email</li>
              <li>No. Telp</li>
              <li>No. Fax</li>
              <li>Alamat</li>
            </ul>
          </div>
          <div class="col-md-1">
            <ul>
              <li>:</li>
              <li>:</li>
              <li>:</li>
              <li>:</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li><i class="glyphicon glyphicon-envelope" id="td1"></i>muridmaupintar@gmail.com</li>
              <li><i class="glyphicon glyphicon-earphone" id="td1"></i>022-7298421</li>
              <li><i class="glyphicon glyphicon-phone-alt" id="td1"></i>+62 22 4226523</li>
              <li><i class="glyphicon glyphicon-home" id="td1"></i>kosan widya graha, rt12 rw12, Sukapura, Red Square, Moscow</li>
            </ul>
          </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8" style="width: 100%">
          <input type="text" name="namakontak" placeholder="Name:">
          <input type="text" name="kategori" placeholder="Category:">
        </div>
        <div class="col-md-8" style="margin-top: 10px">
          <input type="text" name="alamatemail" placeholder="Email:">
          <input type="text" name="notelp" placeholder="Phone:">
        </div>
        <div class="col-md-8" style="margin-top: 10px">
          <textarea  placeholder="Message:"></textarea>
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>Resource/img/mappp.jpg" id="gambirr1">
        </div>     
      </div>
      <div class="col-md-3" style="margin-top: 10px">
            <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
            <br/>
      </div>
 	</div>
 	<hr>
 	<br/>
 	<br/>
 	<br/>
 	<br/>
 	<br/>

    <nav class="navbar navbar-expand-lg navbar-light bg-light footer">
    	<span class="copyright">Copyright &copy;2018 Kelompok 4 Tubes WebPro</span>
  	</nav>
  </body>
  </html>
