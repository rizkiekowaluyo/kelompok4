<?php echo form_open_multipart('admin/add_item'); ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" class="form-control" id="id_item" name="id_item" placeholder="Id">
            </div>
            <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                    <label for="vendor">Vendor</label>
                    <input type="text" class="form-control" id="vendor" name="vendor" placeholder="Vendor">
            </div>
            <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock">
            </div>
            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" cols="25" rows="10"></textarea>
            </div>
            <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type = "file" name = "photo" size = "20" /> 
            </div>
            <input type="submit" name="add" value="Tambah" class="btn btn-success">


            </form>
        </div>
    </div>
</main>