<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/add_user'); ?>
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <h2>ADD ITEM</h2>
                </div>
                <div class="row clearfix">
                        <div class="card">
                                <div class="body">
                                        <div class="form">
                                                        <div class="form-group">
                                                                <label for="username">Username</label>
                                                                <input type="text" class="form-control" id="username" name="username" placeholder="Isikan username">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Isikan password">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Isikan name">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="address">Address</label>
                                                                <input type="text" class="form-control" id="address" name="address" placeholder="Isikan alamat">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="telp">telp</label>
                                                                <input type="text" class="form-control" id="telp" name="telp" placeholder="telp">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="email">email</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="email">
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
        </div>
</section>