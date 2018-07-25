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
                                                        <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?php echo $key['id_transaksi'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="id_brg">Id Barang</label>
                                                        <input type="text" class="form-control" id="id_item" name="id_item" value="<?php echo $key['id_item'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="nama_brg">ID User</label>
                                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $key['id_user'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="id_user">Nama Produk</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $key['name'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="price">Tanggal Order</label>
                                                        <input type="text" class="form-control" id="date" name="date" value="<?php echo $key['date'] ?>" readonly>
                                                </div>  
                                                <div class="form-group">
                                                        <label for="stock">Qty</label>
                                                        <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $key['qty'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Saldo Total</label>
                                                        <input type="text" class="form-control" id="saldo_total" name="saldo_total" value="<?php echo $key['saldo_total'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                        <label for="stock">Status</label>
                                                        <br>
                                                        <select name="status" id="status">
                                                                <option value=""></option>
                                                                <option value="">Processed</option>
                                                        </select>
                                                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $key['status'] ?>" >
                                                </div>
                                                
                                        <?php } ?>
                                                <input type="submit" name="add" value="Ubah" class="btn btn-success">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>