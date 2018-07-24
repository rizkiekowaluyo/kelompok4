<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/edititem'); ?>
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <h2>EDIT ITEM</h2>
                </div>
                <div class="row clearfix">
                        <div class="card">
                                <div class="body">
                                        <div class="form">
                                        <?php echo form_open( 'index.php/admin/EditItem', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                                        <?php foreach ($detailitem as $key) {?>
                                                <div class="form-group">
                                                        <label for="id">Id</label>
                                                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo $key['id_item'] ?>" placeholder="Id">
                                                </div>
                                                <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $key['name'] ?>" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                        <label for="vendor">Description</label>
                                                        <input type="text" class="form-control" id="description_name" name="description_name" value="<?php echo $key['description_name'] ?>" placeholder="description">
                                                </div>
                                                <div class="form-group">
                                                <div class="form-group">
                                                        <label for="vendor">Vendor</label>
                                                        <input type="text" class="form-control" id="vendor" name="vendor" value="<?php echo $key['vendor'] ?>" placeholder="Vendor">
                                                </div>
                                                <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $key['price'] ?>" placeholder="Price">
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Stock</label>
                                                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $key['stock_item'] ?>" placeholder="Stock">
                                                </div>
                                                <div class="form-group">
                                                        <label for="photo">Photo</label>
                                                        <input type = "file" name = "photo" size = "20" value="<?php echo $key['photo'] ?>"> 
                                                </div>
                                        <?php } ?>
                                                <input type="submit" name="add" value="Tambah" class="btn btn-success">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>


