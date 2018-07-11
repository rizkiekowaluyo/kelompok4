<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<br><br><br><br><br><br><br>
<!-- <main role="main" class="container"> -->
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>			
                                    <th>ID Item</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Vendor</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Photo</th>
                                    <th style="text-align: center;">Edit</font></th>
                                    <th style="text-align: center;">Delete</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataitem as $key) {?>
                                <tr>				
                                    <td><?php echo $key['id_item']; ?></td>
                                    <td><?php echo $key['name']; ?></td>
                                    <td><?php echo $key['description_name']; ?></td>
                                    <td><?php echo $key['vendor']; ?></td>
                                    <td><?php echo $key['price']; ?></td>
                                    <td><?php echo $key['stock_item']; ?></td>
                                    <td><?php echo $key['category_item']; ?></td>
                                    <td><?php echo $key['photo']; ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name= "edit" class="form-control" value="<?php echo $key['id_item']; ?>">
                                            <button class="btn btn-warning">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Admin/DeleteItem')?>" method="post">
                                            <input type="hidden" name= "delete" class="form-control" value="<?php echo $key['id_item']; ?>">
                                            <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus kategori <?php echo $key['name']?> ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
        </div>
    </div>
<!-- </main> -->

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

