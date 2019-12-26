
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

