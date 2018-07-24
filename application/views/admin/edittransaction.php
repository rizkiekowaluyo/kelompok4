<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/edittransaction'); ?>
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <h2>EDIT TRANSACTION</h2>
                </div>
                <div class="row clearfix">
                        <div class="card">
                                <div class="body">
                                        <div class="form">
                                        <?php echo form_open( 'index.php/admin/EditTransaction', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                                        <?php foreach ($detailtransaction as $key) {?>
                                                <div class="form-group">
                                                        <label for="id">Id Transaksi</label>
                                                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $key['id_transaksi'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="id_brg">Id Barang</label>
                                                        <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $key['id_barang'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="nama_brg">Nama Barang</label>
                                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $key['nama_barang'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="id_user">Id User</label>
                                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $key['id_user'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="price">Nama Customer</label>
                                                        <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $key['nama_user'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Alamat User</label>
                                                        <input type="text" class="form-control" id="alamat_user" name="alamat_user" value="<?php echo $key['alamat_user'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Harga</label>
                                                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $key['harga'] ?>" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Status</label>
                                                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $key['status'] ?>" >
                                                </div>
                                                
                                        <?php } ?>
                                                <input type="submit" name="add" value="Tambah" class="btn btn-success">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>