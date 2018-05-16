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
    <title>Dashboard</title>
</head>

<body style="background-color:#2d2d2d">

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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/additem')?>">Add Item</a></li>
					<li><a href="<?php echo site_url('admin/seeitem')?>">See List Item</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/addarticle') ?>">Add Blog</a></li>
					<li><a href="<?php echo site_url('admin/seearticle') ?>">See Article</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url();?>index.php/home/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>
    
<div class="container">
    
    <!-- <div class="col-lg-4"> -->
        <div class="jumbotron" style="margin-top:5px">
            <h3>Profile</h3><br>
                <?php if ($jumlah>0) {?>
                    <div class="alert alert-success"><h1><?=$jumlah?> Transaksi Baru</h1></div>
                   
                    <table class="table table-striped table-bordered data">
					<thead>
						<tr>			
							<th>ID Transaksi</th>
							<th>Name User</th>
                            <th>No Hp</th>
                            <th>Tanggal Pesanan</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($user as $key) { 
                            $dataUser = $this->db->where('id_user',$key->id_user)->get('user')->row_array();?>
						<tr>				
							<td><?php echo $key->id_transaction; ?></td>
							<td><?php echo $dataUser['name']; ?></td>
                            <td><?php echo $dataUser['telp'];?></td>
                            <td><?php echo $key->date; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
                <?php } ?>
                <?php if (isset($_SESSION['success'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                hello, <?php echo $_SESSION['username'];?>
        </div>
    <!-- </div>                -->
</div>