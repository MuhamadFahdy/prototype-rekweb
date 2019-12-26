
<!--  carousel di home  -->

  <section class="shipping_details section_padding">

  <div class="bd-example">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/car.jpg') ?>" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/car3.jpg') ?>" class="d-block w-100" alt="..." style="max-height: 100%;">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/car2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
  </div>

<!--  views barang di home  -->

 <div class="container-fluid">
  <div class="row text-center my-2">

     <?php foreach ($barang as $key) : ?>
                <div class="card ml-5 my-4 border-dark" style="width: 250px; height: 100px" >
                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>" class="card-img-top" alt="logo" width="200" height="200">

                <div class="card-body">
                  <h4 class="card-title"><?= $key['nama_barang'] ?></h4>
                  <p class="card-text"><?= $key['brand_barang'] ?></p> 
                </div>

                  <div class="list-group-item">
                    <h4>Rp. <?= number_format($key['harga_barang'], 0,',',',') ?>
                  </div>

                <div class="card-body">
                  <a href="<?= base_url('auth')?>" class="btn btn-sm btn-dark" type="submit">Buy</a>
                </div> 
              </div>
                  <?php endforeach ?>
              </div>
         </div>
       </h4>
</div>
</div>
</div>
</div> 

