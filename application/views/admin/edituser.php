<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/edituser'); ?>
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <h2>EDIT ITEM</h2>
                </div>
                <div class="row clearfix">
                        <div class="card">
                                <div class="body">
                                        <div class="form">
                                        <?php echo form_open( 'index.php/admin/EditUser', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                                        <?php foreach ($detailuser as $key) {?>
                                                <div class="form-group">
                                                        <label for="id">Id</label>
                                                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $key['id'] ?>" placeholder="Id">
                                                </div>
                                                <div class="form-group">
                                                        <label for="name">Username</label>
                                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $key['username'] ?>" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                        <label for="name">Password</label>
                                                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $key['password'] ?>" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $key['name'] ?>" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                        <label for="vendor">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $key['address'] ?>" placeholder="Alamat">
                                                </div>
                                                <div class="form-group">
                                                        <label for="vendor">Telp</label>
                                                        <input type="text" class="form-control" id="Telp" name="Telp" value="<?php echo $key['telp'] ?>" placeholder="Telp">
                                                </div>
                                                <div class="form-group">
                                                        <label for="price">Email</label>
                                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $key['email'] ?>" placeholder="Email">
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