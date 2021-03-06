<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Document</title>
    <style>
		body{
			
            background:url('<?php echo $this->config->base_url(); ?>Resource/img/bgTubes.jpg') no-repeat;
            width:100%;
            height:100vh;
			background-attachment:fixed;
			background-size:cover;
		}
        .form-container{
            border:0px solid #fff;
            padding:50px 60px;
			margin-top:15vh;
			margin-bottom:15vh;
            -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
            -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
            box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        }
    </style>
    
    <script>
    function pengecek(){
        var saya = $('#exampleInputPassword1').val();
        var saya2 = $('#exampleInputPassword2').val();
        console.log(saya+" = "+saya2);
        // kamu = true;
        // for(i=0;i<saya.length;i++){
        //     if(saya[i]!=saya2[i]){
        //                     kamu=false;
        //                     console.log(saya[i]+" = "+saya2[i]);
        //     }
        // }
        return saya==saya2;
    }
    function penghilang(){
        if(pengecek()){
            $('#peringat').hide();
        }else{
            $('#peringat').show();
        }
    }
    </script>
</head>
<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-xs-12"></div>
            <div class="col-lg-4 col-sm-12 col-xs-12">
                <!-- Form Start -->
                <form method='post' action="<?php echo $this->config->base_url(); ?>signup/action" class='form-container form-login'>
                    <h1>Kuriak<sup style="font-size:10px;">Sign Up  </sup></h1>
                    <span style="color:red;"><?php echo validation_errors(); ?></span>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="pwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>                        
                        <input name="pwdv" onkeyup='penghilang();' type="password" class="form-control" id="exampleInputPassword2" placeholder="Type Password Again..." required>
                        <div id='peringat' class="alert alert-danger" role="alert">
                        Ketik Password yang sama!!!
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-primary btn-block">Sign Up</button>
                    <hr>
					<button onclick="window.location = '<?php echo $this->config->base_url().'login'; ?>'" type="button" class="btn btn-primary btn-success btn-block">Login</button>
					<button onclick="window.location = '<?php echo $this->config->base_url().'admin'; ?>'" type="button" class="btn btn-primary btn-danger btn-block">Admin</button>
				</form>
                <!-- Form End -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    <script>
        $('#peringat').css('display','none');
    </script>
</body>
</html>