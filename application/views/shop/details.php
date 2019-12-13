<div class="container-fluid">

<div class="row text-center">
<div class="card border-dark text-black bg-light mb-3 mt-3" style="max-width: 30rem;">
  <h5 class="card-header">Product Details</h5>
  <div class="card-body">

    <div class="row">
      <div class="col-md-6">
        <img src="<?= base_url('assets/')?>img/<?= $barang['img_barang']?>.jpg" class="card-img">
      </div>

      <div class="col-md-3"> </div>
        <table class="table table-striped">

          <tr>
            <td>Product Name</td>
            <td><strong><?= $barang['nama_barang']; ?></strong></td>
          </tr>

          <td>Product Brand</td>
            <td><strong><?= $barang['brand_barang']; ?></strong></td>
          </tr>

           <td>Product Description</td>
            <td><strong><?= $barang['deskripsi_barang']; ?></strong></td>
          </tr>

           <td>Product Price</td>
            <td><strong><div class="btn btn-sm btn-success">Rp. <?= number_format($barang['harga_barang'], 0,',',',') ?></strong></td>
          </tr>
        </table>

        <div class="card-footer text-right">
        <?php echo anchor ('cart/add_to_cart/'.$barang['id_barang'],'<div class="btn btn-dark btn-sm id="left">Add to Cart</div>') ?>

        <?php echo anchor ('shop/index/','<div class="btn btn-sm btn-light" id="right">Continue Shopping</div>') ?>

        
      </div>

    </div>
  </div> 
  </div>
</div>
