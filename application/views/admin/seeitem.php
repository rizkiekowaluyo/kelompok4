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
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>See Item</title>
</head>
 
=======
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>
</head>

>>>>>>> 9d800e704e338886e8b659e29a54a43904ff1c6f
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
<<<<<<< HEAD
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('admin/additem') ?>">Add Item</a></li>
					<li><a href="<?php echo site_url('admin/seeitem') ?>">See List Item</a></li>
=======
            <li><a href="<?php echo site_url('home/aboutus')?>">About Us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="">Add Item</a></li>
					<li><a href="">See List Item</a></li>
>>>>>>> 9d800e704e338886e8b659e29a54a43904ff1c6f
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


<table class="table table-striped table-bordered data">
					<thead>
						<tr>			
							<th>ID Item</th>
							<th>Name</th>
							<th>Description</th>
							<th>Vendor</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Photo</th>
							<th style="text-align: center;">Edit</font></th>
                            <th style="text-align: center;">Delete</font></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dataitem as $key) {?>
						<tr>				
							<td><?php echo $key['id_item']; ?></td>
							<td><?php echo $key['name']; ?></td>
							<td><?php echo $key['description_name']; ?></td>
							<td><?php echo $key['vendor']; ?></td>
                            <td><?php echo $key['price']; ?></td>
                            <td><?php echo $key['stock_item']; ?></td>
                            <td><?php echo $key['category_item']; ?></td>
                            <td><?php echo $key['photo']; ?></td>
							<td>
								<form action="" method="post">
									<input type="hidden" name= "edit" class="form-control" value="<?php echo $key['id_item']; ?>">
									<button class="btn btn-warning">Edit</button>
								</form>
							</td>
							<td>
								<form action="" method="post">
									<input type="hidden" name= "delete" class="form-control" value="<?php echo $key['id_item']; ?>">
									<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus kategori <?php echo $key['name']?> ?')">Delete</button>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
<<<<<<< HEAD
			</div>
<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>
=======
			</div>
>>>>>>> 9d800e704e338886e8b659e29a54a43904ff1c6f
