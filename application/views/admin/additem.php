<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>

<body style="background-color:#f2f2f2">

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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/additem') ?>">Add Item</a></li>
					<li><a href="">See List Item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/addarticle') ?>">Add Blog</a></li>
					<li><a href="<?php echo site_url('admin/seearticle')?>">See Article</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>index.php/home/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>


<?php echo form_open_multipart('admin/add_item'); ?>
<main role="main" class="container">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id_item" name="id_item" placeholder="Id">
            </div>
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <input type="text" class="form-control" id="vendor" name="vendor" placeholder="Vendor">
            </div>
            <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" cols="25" rows="10"></textarea>
            </div>
            <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type = "file" name = "photo" size = "20" /> 
            </div>
            <input type="submit" name="add" value="Tambah" class="btn btn-success">


            </form>
        </div>
    </div>
</main>