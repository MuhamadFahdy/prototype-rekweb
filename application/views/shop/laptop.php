<div class="container-fluid">

           <div class="row text-center mt-4">
                  <?php foreach ($laptop as $key) : ?>

              <div class="card ml-4 mt-4 border-dark" style="width: 20rem;">

                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>.jpg" class="card-img-top" alt="logo" width="200">

                <div class="card-body">
                  <h5 class="card-title"><?= $key['nama_barang'] ?></h5>
                  <p class="card-text"><?= $key['brand_barang'] ?></p> 
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Rp. <?= number_format($key['harga_barang'], 0,',',',') ?></li>
                </ul>

                <div class="card-body">
                  <?php echo anchor ('cart/add_to_cart/'.$key['id_barang'],'<div class="btn btn-sm btn-dark">Add to Cart</div>') ?>
                  
                  <a href="<?= base_url(); ?>shop/details/<?= $key['id_barang'] ?>" class="btn btn-sm btn-light" type="submit">Details</a>
                </div> 
              </div>
                  <?php endforeach ?>
              </div>
         </div>