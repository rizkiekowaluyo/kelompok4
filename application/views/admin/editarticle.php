<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/editarticle'); ?>
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <h2>EDIT ARTICLE</h2>
                </div>
                <div class="row clearfix">
                        <div class="card">
                                <div class="body">
                                        <div class="form">
                                        <?php echo form_open( 'index.php/admin/EditArticle', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                                        <?php foreach ($detailarticle as $key) {?>
                                                <div class="form-group">
                                                        <label for="id">Id</label>
                                                        <input type="text" class="form-control" id="id_article" name="id_article" value="<?php echo $key['id_article'] ?>" placeholder="Id Article">
                                                </div>
                                                <div class="form-group">
                                                        <label for="author">Author</label>
                                                        <input type="text" class="form-control" id="author" name="author" value="<?php echo $key['author'] ?>" placeholder="Author">
                                                </div>
                                                <div class="form-group">
                                                        <label for="Date">Date</label>
                                                        <input type="text" class="form-control" id="date" name="date" value="<?php echo $key['date'] ?>" placeholder="Date">
                                                </div>
                                                <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $key['title'] ?>" placeholder="Title">
                                                </div>
                                                <div class="form-group">
                                                        <label for="content">Price</label>
                                                        <input type="text" class="form-control" id="content" name="content" value="<?php echo $key['content'] ?>" placeholder="Content">
                                                </div>
                                                <div class="form-group">
                                                        <label for="image_file">Image</label>
                                                        <input type = "file" name = "image_file" size = "20" value="<?php echo $key['image_file'] ?>"> 
                                                </div>
                                        <?php } ?>
                                                <input type="submit" name="add" value="Tambah" class="btn btn-success">
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>


