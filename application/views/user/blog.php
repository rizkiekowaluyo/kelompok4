<br><br>
<div class="container">
		<div class="row">
		<?php foreach ($blog_array as $key) {
			$increment = 3;
				if($increment%3==0){ ?>

					<div class="container">
					<div class="row">
	    			<div class="col-sm-3">
		    
		        <?php } ?>
					<div class="panel panel-danger">
		    	    	<div class="panel-heading"><?php echo $key['title']?></div>
		        		
		        		<?php echo "
		        		<div class='panel-body'><img src='".base_url()."asset/imgblog/".$key['image_file']."' class='img-responsive' style='width:100%; height: 200px' alt='Image'></div>
		        		"?>

		        		<div class="panel-footer">Vendor : <?php echo $key['author'];?></div>
		        		<div class="panel-footer">Tanggal : <?php echo $key['date'];?></div>

								<form action="">

								</form>
								
								<a id="detail_blog" href="" data-toggle="modal" data-target="#detail" data-id="<?php echo $key['id_article']?>" data-auth="<?php echo $key['author']?>" data-date="<?php echo $key['date']?>" data-con="<?php echo $key['content']?>" data-title="<?php echo $key['title']?>" data-img="<?php echo $key['image_file']?>">
								<button type="button" class="btn btn-info btn-lg" >Baca</button>
								</a>
								
								<div id="detail" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<!-- konten modal-->
										<div class="modal-content">
											<!-- heading modal -->
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Blog</h4>
											</div>
											<!-- body modal -->
											<form id="form" enctype="multipart/form-data">
												<div class="modal-body" id="modal-detail">
													<div class="form-group">
														<label class="control-label" for="title">Judul</label>
														<input type="text" name="title" class="form-control" id="title" readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="auth">Author</label>
														<input type="text" name="auth" class="form-control" id="auth"readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="date">Tanggal</label>
														<input type="text" name="date" class="form-control" id="date"readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="con">Content</label>
														<textarea type="text" name="con" class="form-control" id="con" readonly></textarea> 
													</div>
													<div class="form-group">
														<label class="control-label" for="img">Gambar</label>
														<div id="img"></div>
													</div>
												</div>
											</form>	
											<!-- footer modal -->
											<div class="modal-footer">
												<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->

											</div>
										</div>
									</div>
								</div>

								<script type="text/javascript">
									$(document).on("click", "#detail_blog", function(){
										var id = $(this).data('id');
										var auth = $(this).data('auth');
										var date = $(this).data('date');
										var con = $(this).data('con');
										var title = $(this).data('title');
										
										$("#modal-detail #title").val(title);
										$("#modal-detail #auth").val(auth);
										$("#modal-detail #date").val(date);
										$("#modal-detail #con").val(con);
									})
								</script>

								<script type="text/javascript">
									$(document).on("click", "#detail_blog", function(){
										var img = $(this).data('img');
										var simg = new Image(100, 100);

										simg.src = .base_url()."asset/imgblog/".img;
										x = getElementsById('img');
										x. document.appendChild(simg);
										$("#modal-detail #img".simg);
									})
								</script>


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