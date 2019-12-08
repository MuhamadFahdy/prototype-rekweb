
  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to Vlava!</h2>
      <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
      <div>
        <a href="#section-services" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
  <div class="row">
    <?php foreach ($barang as $key) : ?>
    <div class="col-sm-3">
      <div class="card">
        <div class="card-image">
          <img  src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>" width="250" height="200">
        </div>

        <div class="card-content">
          <h3 class=""><?= $key['nama_barang'] ?></h3>
        </div>

        <div class="card-action">
          <h2 href="#" target="new_blank">Rp.<?= $key['harga_barang'] ?></h2>
          <hr>
          <a  class="btn btn-primary col-lg-12" href="#" target="new_blank">detail</a>
        </div>
      </div>
    </div>
      <?php endforeach ?>
    </div>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>
