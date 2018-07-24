<div class="container">
    
    <!-- <div class="col-lg-4"> -->
        <div class="jumbotron" style="margin-top:5px">
            <h3>Profile</h3><br>
                <?php if (isset($_SESSION['success'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                hello, <?php echo $_SESSION['username'] ?>
                		<?php echo $_SESSION['id']?>
														<?php echo $_SESSION['name']?>
														<?php echo $_SESSION['address']?>;?>
        </div>
    <!-- </div>                -->
</div>
</body>
</html>

<!--Beginning of Box-->
<br><br>
<div class="container">
		<div class="row">
		<?php foreach ($item_array as $key) {
			$increment = 3;
			
				if($increment%3==0){ ?>

					<div class="container">
					<div class="row">
	    			<div class="col-sm-3">
		    
		        <?php } ?>

					<div class="panel panel-danger">
		    	    	<div class="panel-heading"><?php echo $key['name']?></div>
		        		
		        		<?php echo "
		        		<div class='panel-body'><img src='".base_url()."asset/imgitem/".$key['photo']."' class='img-responsive' style='width:100%; height: 200px' alt='Image'></div>
		        		"?>

		        		<div class="panel-footer">Vendor : <?php echo $key['vendor'];?></div>
		        		<div class="panel-footer">Harga : <?php echo $key['price'];?></div>

								<form action="">

								</form>

									
								
								<a id="detail_item" href="" data-toggle="modal" data-target="#detail" data-id="<?php echo $key['id_item']?>" data-name="<?php echo $key['name']?>" data-desc="<?php echo $key['description_name']?>" data-ven="<?php echo $key['vendor']?>" data-stock="<?php echo $key['stock_item']?>" data-price="<?php echo $key['price']?>" data-photo="<?php echo $key['photo']?>" >
								<button type="button" class="btn btn-info btn-lg" >Detail</button>
								</a>

								
								<!--
								<button type="button" class="btn btn-info btn-lg" onclick="return confirm('yakin akan pesan ini?')"><a href="<?=site_url().'/Transaksi/processtransaction/'.$key['id_item']?>">Order</a></button>
								-->
								
								<div id="detail" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<!-- konten modal-->

										<?php echo form_open_multipart('admin/add_transaction'); ?>
										<div class="modal-content">
											<!-- heading modal -->
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Detail</h4>
											</div>
											<!-- body modal -->
											<form id="form" enctype="multipart/form-data">
												<div class="modal-body" id="modal-detail">
													<div class="form-group">
														<label class="control-label" for="name">Nama</label>
														<input type="text" name="name" class="form-control" id="name" readonly>
														
														<!--
														data-idUsr="<?php echo $key1['id']?>" data-namaUsr="<?php echo $key1['name']?>" data-alamatUsr="<?php echo $key1['address']?>"
														<input type="text" name="id_user" class="form-control" id="id_user" readonly>
														<input type="text" name="nama_user" class="form-control" id="nama_user" readonly>
														<input type="text" name="alamat_user" class="form-control" id="alamat_user" readonly>
														-->
													</div>
													<div class="form-group">
														<label class="control-label" for="photo">Gambar</label>
														<div>
															<img src="" width="200px" id="photo">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label" for="vendor">Vendor</label>
														<input type="text" name="vendor" class="form-control" id="vendor"readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="desc">Deskripsi</label>
														<input type="text" name="desc" class="form-control" id="desc"readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="stock">Stok</label>
														<input type="text" name="stock" class="form-control" id="stock" readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="price">Price</label>
														<input type="text" name="price" class="form-control" id="price"readonly>
													</div>
												</div>
											</form>	
											<!-- footer modal -->
											<div class="modal-footer">
												<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button> -->

												<button type="button" class="btn btn-info btn-lg" onclick="return confirm('yakin akan pesan ini?')"><a href="<?=site_url().'/Transaksi/processtransaction/'.$key['id_item']?>">Order</a></button>
											</div>
										</div>
									</div>
								</div>

								<script type="text/javascript">
									$(document).on("click", "#detail_item", function(){
										var id = $(this).data('id');
										var name = $(this).data('name');
										var desc = $(this).data('desc');
										var vendor = $(this).data('ven');
										var stock = $(this).data('stock');
										var price = $(this).data('price');
										var photo = $(this).data('photo');
										var id_user = $(this).data('idUsr');
										var nama_user = $(this).data('namaUsr');
										var alamat_user = $(this).data('alamatUsr');
										
										$("#modal-detail #name").val(name);
										$("#modal-detail #vendor").val(vendor);
										$("#modal-detail #desc").val(desc);
										$("#modal-detail #stock").val(stock);
										$("#modal-detail #price").val(price);
										$("#modal-detail #id_user").val(id_user);
										$("#modal-detail #nama_user").val(nama_user);
										$("#modal-detail #alamat_user").val(alamat_user);
										$("#modal-detail #photo").attr("src", "../../asset/imgitem/"+photo);
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
														
														
														

														
