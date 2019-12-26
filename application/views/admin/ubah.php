
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>

          <h4><strong>Form Edit Product</strong></h4>

          <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="id_barang" value="<?= $barang['id_barang']?>">
                <label for="nama_barang">Product Name</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']?>" >
                <small><?= form_error('nama_barang') ?></small>
                
                <br>
                <label for="deskripsi_barang">Product Description</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" value="<?= $barang['deskripsi_barang']?>">
                <small><?= form_error('deskripsi_barang') ?></small>

                <br>
                <label for="brand_barang">Product Brand</label>
                <input type="text" class="form-control" id="brand_barang" name="brand_barang" value="<?= $barang['brand_barang']?>">
                <small><?= form_error('brand_barang') ?></small> 

                <br>
                <label for="category_barang">Product Category</label>
                <input type="text" class="form-control" id="category_barang" name="category_barang" value="<?= $barang['category_barang']?>">
                <small><?= form_error('category_barang') ?></small> 

                <br>
                <label for="harga_barang">Product Price</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $barang['harga_barang']?>">
                <small><?= form_error('harga_barang') ?></small>

                <label for="img_barang"><br><img src="<?= base_url('')?>./assets/img/<?= $barang['img_barang'] ?>" width="300"></label>
                  <div class="form-group">
                    <input type="file" for="img" name="img">
                  </div>
                <small><?= form_error('img_barang') ?></small>

                <a href="<?= base_url('admin/index')?>" class="btn btn-dark"><i class=""></i>Back</a>
                
                <button type="submit" class="btn btn-primary" name="ubah" >Change Product Information</button>
          </form>
        </div>
      </div>
    </div>



