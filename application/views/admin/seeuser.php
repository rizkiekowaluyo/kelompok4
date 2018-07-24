<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SEE USER</h2>
        </div>
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>			
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Telp</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th style="text-align: center;">Edit</font></th>
                                    <th style="text-align: center;">Delete</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datauser as $key) {?>
                                <tr>				
                                    <td><?php echo $key['id_user']; ?></td>
                                    <td><?php echo $key['username']; ?></td>
                                    <td><?php echo $key['password']; ?></td>
                                    <td><?php echo $key['name']; ?></td>
                                    <td><?php echo $key['address']; ?></td>
                                    <td><?php echo $key['telp']; ?></td>
                                    <td><?php echo $key['email']; ?></td>
                                    <td><?php echo $key['photo']; ?></td>
                                    <td>
                                        <form action="#" method="post">
                                            <input type="hidden" name= "edit" class="form-control" value="#">
                                            <button class="btn btn-warning">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Admin/DeleteUser')?>" method="post">
                                            <input type="hidden" name= "id_user" class="form-control" value="<?php echo $key['id_user']; ?>">
                                            <input type="hidden" name="nameimage" value="<?php echo $key['photo']?>">
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

