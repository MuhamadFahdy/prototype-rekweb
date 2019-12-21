<br>
<br>
<br>
<br>

<div class="container-fluid">
  <div class="row col-12">
     <?php foreach ($barang as $key) : ?>
                <div class="card ml-4 border-dark" style="width: 250px; height: 100px" >
                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>" class="card-img-top" alt="logo" width="200" height="200">

                <div class="card-body">
                  <h4 class="card-title"><?= $key['nama_barang'] ?></h4>
                  <p class="card-text"><?= $key['brand_barang'] ?></p> 
                </div>

                  <div class="list-group-item">
                    <h4>Rp. <?= number_format($key['harga_barang'], 0,',',',') ?>
                  </div>

                <div class="card-body">
                  <?php echo anchor ('cart/add_to_cart/'.$key['id_barang'],'<div class="btn btn-sm btn-dark">Add to Cart</div>') ?>
                  
                  <a href="<?= base_url(); ?>user/details/<?= $key['id_barang'] ?>" class="btn btn-sm btn-light" type="submit">Details</a>

                  <input type="hidden" name="nama_barang" value="<?= $key['nama_barang'] ?>">
                  <a href="<?= base_url('user/buy');?>/<?= $key['id_barang'] ?>" class="btn btn-sm btn-success" type="submit">Buy 1</a>
                </div> 
              </div>
                  <?php endforeach ?>
              </div>
         </div>
         <br>
</div>
</div>
</div>
</div>
