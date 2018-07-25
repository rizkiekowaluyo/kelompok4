<div class="container">
     <h2 align="center">KERANJANG BELANJA</h2><br><br><br>
     <form action="<?php echo site_url('user/ubah'); ?>" method="post" enctype="multipart/form-data">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th width="150">QTY</th>
            <th>Subtotal</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $total = 0;
            if(count($cart) > 0){
            foreach($cart as $item){
              $total += $item['subtotal'];
          ?>
          <tr>
            <td><img src="<?php echo base_url('asset/imgitem/'.$item['photo']) ?>" width="100"></td>
            <td><?php echo $item['name']; ?></td>
            <td>Rp <?php echo number_format($item['price'],0,',','.'); ?></td>
            <td>
              <input type="hidden" name="cart[<?php echo $item['id_item'];?>][id_item]" value="<?php echo $item['id_item'];?>" />
              <input type="hidden" name="cart[<?php echo $item['id_item'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
              <input type="hidden" name="cart[<?php echo $item['id_item'];?>][name]" value="<?php echo $item['name'];?>" />
              <input type="hidden" name="cart[<?php echo $item['id_item'];?>][price]" value="<?php echo $item['price'];?>" />
              <input type="hidden" name="cart[<?php echo $item['id_item'];?>][photo]" value="<?php echo $item['photo'];?>" />
              <input type="number" min="1" max="4" name="cart[<?php echo $item['id_item'];?>][qty]" class="form-control" value="<?php echo $item['qty']; ?>">
            </td>
            <td>Rp <?php echo number_format($item['subtotal'],0,',','.'); ?></td>
            <td><a href="<?php echo site_url('user/hapus/'.$item['rowid']); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
          </tr>
        <?php }}else{echo'<tr><td colspan="6" align="center"><h3>Keranjang Belanja Kosong.</h3></td></tr>'; } ?>
        </tbody>
      </table><hr><br>
      <h4>Total Yang Harus Dibayar : Rp <?php echo number_format($total,0,',','.'); ?></h4>
        <button type="submit" class="btn btn-default">Refresh</button>
        <a href="<?php echo site_url('user/hapus/semua'); ?>" class="btn btn-danger">Kosongkan</a>
        <a href="<?php echo site_url('user/bayar'); ?>" class="btn btn-primary">Bayar</a>
    </form>