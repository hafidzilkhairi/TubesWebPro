<html lang="en">
  <body>
    <div class="container" style="margin-top: 100px;" style="background-color: rgba(255, 255, 255, 3);">
      <div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
            <div class="holder"></div>

          <ul id="itemContainer">
            	<?php 
      					if (isset($data)) {
      					  foreach ($data as $x) {
            	 ?>
                <li style="float : left;">
                	<a href="<?php echo $this->config->base_url(); ?>?id=<?php echo $x['id_artikel'] ?>">
                    <div class="row">
                    	<div class="col-md-12">
                    		<i class="fa fa-clock-o"></i> <?php echo $x['tgl'] ?>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-md-12">
                    		<h4><?php echo $x['judul'] ?></h4>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                    		<img src="imgartkl/natsu.jpg" style="height: 100px; width: 200px;" class="image responsive">
                    	</div>
                    	<div class="col-md-5 captionProduk">
                    		<p><?php echo $x['review'] ?></p>
                    	</div>
                    </div>
                    </a>
                </li>
                <?php
                    }}
                ?> 
          </ul>         
          </div>
      </div>
      </div>


      <script>
          $(document).ready(function() {
            $("div.holder").jPages({
              containerID:"itemContainer",
              perPage:6
            })
            $('aasasa').addClass('w3-button w3-hover-red');
          });
      </script>
  </body>
</html>
<style>
  #u {margin-left: 50px;}
  .holder {float: right}
  #i {margin-left: 30px;}
  a {color: black;}
  li  {list-style-type: none;}
</style>
<head>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/jPages.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>