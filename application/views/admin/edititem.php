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
                                                <div class="form-group">
                                                        <label for="id">Id</label>
                                                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo $key['id_item'] ?>" placeholder="Id">
                                                </div>
                                                <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $key['name'] ?>" placeholder="Name">
                                                </div>
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
                                                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $key['stock'] ?>" placeholder="Stock">
                                                </div>
                                                <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea type="text" class="form-control" id="description" name="description" value="<?php echo $key['description'] ?>" placeholder="Description" cols="25" rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="photo">Photo</label>
                                                        <input type = "file" name = "photo" size = "20" /> 
                                                </div>
                                                <input type="submit" name="add" value="Tambah" class="btn btn-success">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>


