<div class="container-fluid">
  <div class="row mt-5 mb-5">
    
           <div class="row text-center my-4">
                  <?php foreach ($barang as $key) : ?>

                <div class="card ml-5 my-4 border-dark" style="width: 15rem;">

                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>" class="card-img-top" alt="logo" width="200">

                <div class="card-body">
                  <h4 class="card-title"><?= $key['nama_barang'] ?></h4>
                  <p class="card-text"><?= $key['brand_barang'] ?></p> 
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><h4>Rp. <?= number_format($key['harga_barang'], 0,',',',') ?></li>
                </ul>

                <div class="card-body">
                  <?php echo anchor ('cart/add_to_cart/'.$key['id_barang'],'<div class="btn btn-sm btn-dark">Add to Cart</div>') ?>
                  
                  <a href="<?= base_url(); ?>shop/details/<?= $key['id_barang'] ?>" class="btn btn-sm btn-light" type="submit">Details</a>
                </div> 
              </div>
                  <?php endforeach ?>
              </div>
         </div>

      </h4>
    </li>
  </ul>
</div>
</div>
</div>
</div>
