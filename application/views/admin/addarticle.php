<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open_multipart('admin/add_picture'); ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id_article" name="id_article" placeholder="Id">
            </div>
            <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
            </div>
            <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
            </div>
            <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" class="form-control" id="content" name="content" placeholder="Content" cols="25" rows="10"></textarea>
            </div>
            <div class="form-group">
                    <label for="image_file">Image</label>
                    <input type = "file" name = "image_file" size = "20" /> 
            </div>
            <input type="submit" name="add" value="Tambah" class="btn btn-success">


            </form>
        </div>
    </div>
</main>