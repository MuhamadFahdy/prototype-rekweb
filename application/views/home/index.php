
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
          <img  src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>.jpg" width="250">
        </div>

        <div class="card-content">
          <p><?= $key['nama_barang'] ?></p>
        </div>

          <div class="card-content">
          <p><?= $key['nama_barang'] ?></p>
        </div>

          <div class="card-content">
          <p><?= $key['nama_barang'] ?></p>
        </div>
        <div class="card-action">
          <a href="#" target="new_blank">Link</a>
          <a href="#" target="new_blank">Link</a>

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
