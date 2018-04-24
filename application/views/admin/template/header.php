<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu-admin{
            height: 100vh;
            width: 200px;
            position: fixed;
            background: #292c2f;
            color: white;
            top: 0;
            transition: ease-in-out left 0.71s;
            left:-200px;
            padding-top: 20px; 
            overflow:auto;
        }
        .menu-admin ul{
            margin: 0;
            padding: 0;
        }
        .menu-admin li{
            padding: 15px 0 15px 20px;
            height: auto;
            list-style: none;
            width: 100%;
            border-bottom: 1px solid black;
            cursor: pointer;
            font-weight: bold;
        }
        .menu-admin li:first-child{
            border-top: 1px solid black;
        }
        .menu-admin li:hover{
            background: #202020;
        }
        .menu-admin li a{
            text-decoration: none;
            display: block;
            color: white;
        }
    </style>
    <script>
        function toggle(){
            if($('.menu-admin').css('left')=='0px'){
                $('.menu-admin').css('left','-200px');
            }else{
                $('.menu-admin').css('left','0px');
            }
        }
        $(document).ready(function(){
            $('#tombolToggle').click(toggle);
            $('#tombolToggle').blur(function(){
                $('.menu-admin').css('left','-200px');
            })
        });
    </script>
</head>
<body>
    <!-- Menu Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">KURIAK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <i onclick="toggle()" style="cursor: pointer;" class="fa fa-bars"></i>
    </nav>
    <div class="menu-admin">
        <ul>
            <li onclick="toggle()"><b>X</b> Close</li>
            <li><a href="http://google.com">Saya</a></li>
            <li>Saya dan dia selalu bersama sama</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
            <li>Saya</li>
        </ul>
    </div>
    <div class="main-menu">
        <div class="action-admin">

        </div>
    </div>