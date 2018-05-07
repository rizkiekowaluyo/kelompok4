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
            <li><a href="<?php echo site_url('home/aboutus')?>">About Us</a></li>
            <li><a href="#">List Item</a></li>
            <li><a href="<?php echo site_url('user/blog')?>">Blog</a></li>
            <li><a href="<?php echo base_url();?>index.php/home/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>

<!--Beginning of Box-->
<div class="container">
		<div class="row">
		<?php foreach ($blog_array as $key) {
			$increment = 3;
				if($increment%3==0){ ?>
					<div class="container">
					<div class="row">
	    			<div class="col-sm-4">
		    
		        <?php } ?>
					<div class="panel panel-primary">
		    	    	<div class="panel-heading"><?php echo $key['title']?></div>
		        		<?php $dirName = './asset/imgblog';
		        		$fileName = $key["image_file"];
		        		$imageUrl = $dirName . $fileName; ?>
		        		<div class="panel-body"><img src="<?php echo base_url($imageUrl); ?>" class="img-responsive" style='width:100%; height: 200px' alt="Image"></div>
		        		<div class="panel-footer">Author : <?php echo $key['author'];?></div>
								<form action="">
								</form>
								
								<!-- <button type="button" class="btn btn-default btn-blog"><a href="<?php echo site_url('home/blog_detail/'.$key['id'])?>">View Detail</a></button>
								<button type="button" class="btn btn-default btn-blog"><a href="<?php echo site_url('home/blog_create/')?>">Create Data</a></button> -->
								<!-- <form action="<?php echo site_url('Home/DeleteData') ?>" method="post">
								    <input type="hidden" name="id" value="<?php echo $key['id_article']?>">
		        			        <input type="hidden" name="jeneng" value="<?php echo $key['image_file']?>">
									<button class="btn btn-danger btn-blog" onclick="return confirm('yakin akan menghapus data ini?')">Delete Data</button>
								</form> -->
								<!-- <form action="<?php echo site_url('Home/EditData') ?>" method="post">
		        			        <input type="hidden" name="id" value="<?php echo $key['id_article']?>">
		        			        <button class="btn btn-success btn-blog" style="margin-bottom: 10px;">Edit Data</button>
		        		        </form> -->
		        		<HR>
		        		<center>
		        	
		        		</center>
		    		</div>
		    		</div>
				<?php $increment = $increment + 1;
			    if($increment%3==0){ ?>
		    		</div>
		    		</div>
			    	<br>
				<?php } ?>
			<?php } ?>
	</div>
</div>