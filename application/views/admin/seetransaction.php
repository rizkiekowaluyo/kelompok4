<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SEE TRANSACTION</h2>
        </div>
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>			
                                    <th>ID Transaction</th>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>ID User</th>
                                    <th>Nama User</th>
                                    <th>Alamat User</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th style="text-align: center;">Edit</font></th>
                                    <th style="text-align: center;">Delete</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datatransaction as $key) {?>
                                <tr>				
                                    <td><?php echo $key['id_transaksi']; ?></td>
                                    <td><?php echo $key['id_barang']; ?></td>
                                    <td><?php echo $key['nama_barang']; ?></td>
                                    <td><?php echo $key['id_user']; ?></td>
                                    <td><?php echo $key['nama_user']; ?></td>
                                    <td><?php echo $key['alamat_user']; ?></td>
                                    <td><?php echo $key['harga']; ?></td>
                                    <td><?php echo $key['status']; ?></td>
                                    <td>
                                        <form action="<?php echo site_url('Admin/toedittransaction')?>" method="post">
                                            <input type="hidden" name= "edit" class="form-control" value="<?php echo $key['id_transaksi']; ?>">
                                            <button class="btn btn-warning">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Admin/DeleteTransaction')?>" method="post">
                                            <input type="hidden" name= "id_transaksi" class="form-control" value="<?php echo $key['id_transaksi']; ?>">
                                            <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus transaksi <?php echo $key['id_transaksi']?> ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

<script>
$(document).ready( function () {
    $('.data').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
} );
</script>