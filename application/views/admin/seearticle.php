<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>SEE ARTICLE</h2>
        </div>
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered data">
                            <thead>
                                <tr>			
                                    <th>ID Article</th>
                                    <th>Author</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image_file</th>
                                    <th style="text-align: center;">Edit</font></th>
                                    <th style="text-align: center;">Delete</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataarticle as $key) {?>
                                <tr>				
                                    <td><?php echo $key['id_article']; ?></td>
                                    <td><?php echo $key['author']; ?></td>
                                    <td><?php echo $key['date']; ?></td>
                                    <td><?php echo $key['title']; ?></td>
                                    <td><?php echo $key['content']; ?></td>
                                    <td><?php echo $key['image_file']; ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name= "edit" class="form-control" value="<?php echo $key['id_article']; ?>">
                                            <button class="btn btn-warning">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo site_url('Admin/DeleteArticle')?>" method="post">
                                            <input type="hidden" name= "id_article" class="form-control" value="<?php echo $key['id_article']; ?>">
                                            <input type="hidden" name="nameimage" value="<?php echo $key['image_file']?>">
                                            <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus article ini?')">Delete</button>
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

<script>
$(document).ready( function () {
    $('.data').DataTable();
} );
</script>