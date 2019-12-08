
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>
          <h3>Form Hapus Barang</h3>
          <form method="post" action="">
              <div class="form-group">
                <input type="hidden" name="id" value="<?= $barang['id']?>">
                <label for="nama_barang">nama_barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']?>" >
                <small><?= form_error('nama_barang') ?></small>
                
                <label for="deskripsi_barang">deskripsi_barang</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" value="<?= $barang['deskripsi_barang']?>">
                <small><?= form_error('deskripsi_barang') ?></small>

                <label for="harga_barang">harga_barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $barang['harga_barang']?>">
                <small><?= form_error('harga_barang') ?></small>

                <label for="img_barang">img_barang</label>
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" value="aa">
                  </div>
                </form>
                <small><?= form_error('img_barang') ?></small>

              <button type="submit" class="btn btn-primary" name="ubah" >Ubah data mahasiswa</button>
          </form>
        </div>
      </div>
    </div>



