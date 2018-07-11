<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Biodata Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/bootstrap.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/bootstrap-theme.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }
            
            /* Add a gray background color and some padding to the footer */
            footer {
            background-color: #f2f2f2;
            padding: 5px;
            }
            
        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            margin: auto;
            min-height:200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
            display: none; 
            }
        }
        </style>
</head>
<body>

<!-- navigasi bar menu diatas  -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Bengkelin</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo site_url('home/aboutus')?>">About Us</a></li>
            <?php if ($this->session->userdata('logged_in')) {?>
            <li><a href="#">Contact</a></li>
            <?php } ?>
            <?php if (!$this->session->userdata('logged_in')) {?>
            <li><a href="<?php echo site_url('home/registerpage')?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="<?php echo site_url('home/loginpage')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php } ?>
        </ul>
        </div>
    </div>
</nav>
