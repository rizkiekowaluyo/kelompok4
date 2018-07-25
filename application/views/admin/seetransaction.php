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
                                    <th>ID Item</th>
                                    <th>ID User</th>
                                    <th>Nama Produk</th>
                                    <th>Tanggal Order</th>
                                    <th>Qty</th>
                                    <th>Saldo total</th>
                                    <th>Status</th>
                                    <th style="text-align: center;">Edit</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datatransaction as $key) {?>
                                <tr>				
                                    <td><?php echo $key['id_transaksi']; ?></td>
                                    <td><?php echo $key['id_item']; ?></td>
                                    <td><?php echo $key['id_user']; ?></td>
                                    <td><?php echo $key['name']; ?></td>
                                    <td><?php echo $key['date']; ?></td>
                                    <td><?php echo $key['qty']; ?></td>
                                    <td><?php echo $key['saldo_total']; ?></td>
                                    <td><?php echo $key['status']; ?></td>
                                    <td>
                                       <a href="<?= site_url('Admin/edittransaksi/')?><?= $key['id_transaksi'] ?>" class="btn btn-success">Edit
                                       </a>
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