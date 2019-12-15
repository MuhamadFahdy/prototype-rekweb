<div class="container-fluid">
  <div class="row mt-3">
    <div class="col">    

      <div class="wrapper">

          <!-- Sidebar -->
          <nav id="sidebar">
              <div class="sidebar-header">
                  <h3>Bootstrap Sidebar</h3>
              </div>

              <ul class="list-unstyled components">
                  <p>Dummy Heading</p>
                  <li class="active">
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                          <li>
                              <a href="#">Home 1</a>
                          </li>
                          <li>
                              <a href="#">Home 2</a>
                          </li>
                          <li>
                              <a href="#">Home 3</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#">About</a>
                  </li>
                  <li>
                      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                      <ul class="collapse list-unstyled" id="pageSubmenu">
                          <li>
                              <a href="#">Page 1</a>
                          </li>
                          <li>
                              <a href="#">Page 2</a>
                          </li>
                          <li>
                              <a href="#">Page 3</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="#">Portfolio</a>
                  </li>
                  <li>
                      <a href="#">Contact</a>
                  </li>
              </ul>
          </nav>

      </div>

      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
              <a href="#">Page 1</a>
          </li>
          <li>
              <a href="#">Page 2</a>
          </li>
          <li>
              <a href="#">Page 3</a>
          </li>
      </ul>

      <div id="content">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">

                  <button type="button" id="sidebarCollapse" class="btn btn-info">
                      <i class="fas fa-align-left"></i>
                      <span>Toggle Sidebar</span>
                  </button>

              </div>
          </nav>
      </div>

        </div>

        </div>
        

      </div>

















<div class="container-fluid">
  <div class="row mt-5 mb-5">
    
           <div class="row text-center my-4">
                  <?php foreach ($barang as $key) : ?>

                <div class="card ml-3 my-3 border-dark" style="width: 15rem;">

                <img src="<?= base_url('assets/')?>img/<?= $key['img_barang']?>.jpg" class="card-img-top" alt="logo" width="200">

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
