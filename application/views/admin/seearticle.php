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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>See Article</title>
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
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item<span class="caret"></span></a>
                <ul class="dropdown-menu">
<<<<<<< HEAD
                    <li><a href="<?php echo site_url('admin/additem') ?>">Add Item</a></li>
					<li><a href="<?php echo site_url('admin/seeitem') ?>">See List Item</a></li>
=======
                    <li><a href="<?php echo site_url('admin/additem')?>">Add Item</a></li>
					<li><a href="<?php echo site_url('admin/seeitem')?>">See List Item</a></li>
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
							<th>ID Article</th>
							<th>Author</th>
							<th>Date</th>
							<th>Title</th>
                            <th>Content</th>
                            <th>Image_file</th>
							<th style="text-align: center;">Edit</font></th>
                            <th style="text-align: center;">Delete</font></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dataarticle as $key) {?>
						<tr>				
							<td><?php echo $key['id_article']; ?></td>
							<td><?php echo $key['author']; ?></td>
							<td><?php echo $key['date']; ?></td>
							<td><?php echo $key['title']; ?></td>
                            <td><?php echo $key['content']; ?></td>
                            <td><?php echo $key['image_file']; ?></td>
							<td>
								<form action="" method="post">
									<input type="hidden" name= "edit" class="form-control" value="<?php echo $key['id_article']; ?>">
									<button class="btn btn-warning">Edit</button>
								</form>
							</td>
							<td>
								<form action="<?php echo site_url('Admin/DeleteArticle')?>" method="post">
									<input type="hidden" name= "id_article" class="form-control" value="<?php echo $key['id_article']; ?>">
                                    <input type="hidden" name="nameimage" value="<?php echo $key['image_file']?>">
									<button class="btn btn-danger" onclick="return confirm('yakin akan menghapus article ini?')">Delete</button>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>