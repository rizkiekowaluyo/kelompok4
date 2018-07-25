<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SEE HISTORY</h2>
        </div>
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>			
                                    <th>ID Transaction</th>
                                    <th>Username</th>
                                    <th>Nama Produk</th>
                                    <th>Tanggal Order</th>
                                    <th>Qty</th>
                                    <th>Saldo total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($history as $key) {?>
                                <tr>				
                                    <td><?php echo $key->id_transaksi; ?></td>
                                    <td><?php echo $key->username; ?></td>
                                    <td><?php echo $key->name; ?></td>
                                    <td><?php echo $key->date; ?></td>
                                    <td><?php echo $key->qty; ?></td>
                                    <td><?php echo $key->saldo_total; ?></td>
                                    <td><?php echo $key->status; ?></td>
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