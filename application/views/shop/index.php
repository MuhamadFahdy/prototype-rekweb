

<div class="container-fluid">
  <div class="row text-center">
    
                  <?php foreach ($barang as $key) : ?>

               <div class="card ml-4 mt-4 border-dark" style="width: 285px; height: 480px" >

                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>" class="card-img-top" alt="logo" width="300" height="250">

                <div class="card-body">
                  <h3 class="card-title"><strong><?= $key['nama_barang'] ?></strong></h3>
                  <p class="card-text"><strong><?= $key['brand_barang'] ?></strong></p> 
                </div>

                  <div class="list-group-item">
                    <h3><strong>Rp. <?= number_format($key['harga_barang'], 0,',',',') ?>
                  </strong></h3></div>

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
