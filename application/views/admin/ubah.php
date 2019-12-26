
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>
          <h3>Form Ubah</h3>
          <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="id_barang" value="<?= $barang['id_barang']?>">
                <label for="nama_barang">nama_barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']?>" >
                <small><?= form_error('nama_barang') ?></small>
                
                <label for="deskripsi_barang">deskripsi_barang</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" value="<?= $barang['deskripsi_barang']?>">
                <small><?= form_error('deskripsi_barang') ?></small>

                <label for="brand_barang">brand_barang</label>
                <input type="text" class="form-control" id="brand_barang" name="brand_barang" value="<?= $barang['brand_barang']?>">
                <small><?= form_error('brand_barang') ?></small> 

                <label for="category_barang">category_barang</label>
                <input type="text" class="form-control" id="category_barang" name="category_barang" value="<?= $barang['category_barang']?>">
                <small><?= form_error('category_barang') ?></small> 

                <label for="harga_barang">harga_barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $barang['harga_barang']?>">
                <small><?= form_error('harga_barang') ?></small>

                <label for="img_barang"><br><img src="<?= base_url('')?>./assets/img/<?= $barang['img_barang'] ?>" width="300"></label>
                  <div class="form-group">
                    <input type="file" for="img" name="img">
                  </div>
                <small><?= form_error('img_barang') ?></small>

              <button type="submit" class="btn btn-primary" name="ubah" >Ubah data</button>
          </form>
        </div>
      </div>
    </div>



