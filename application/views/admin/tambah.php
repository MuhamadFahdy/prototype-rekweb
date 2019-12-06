
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>
          <h3>Form Tambah Mahasiswa</h3>
          <form method="post" action="">
              <div class="form-group">
                <label for="nama_barang">nama_barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                <small><?= form_error('nama_barang') ?></small>
                
                <label for="deskripsi_barang">deskripsi_barang</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
                <small><?= form_error('nama_barang') ?></small>

                <label for="harga_barang">harga_barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                <small><?= form_error('nama_barang') ?></small>

                <label for="img_barang">img_barang</label>
                 <form method="post">
                  <div class="form-group">
                    <input type="file" class="form-control-file" id="img_barang" name="img_barang">
                  </div>
                </form>
                <small><?= form_error('nama_barang') ?></small>

              <button type="submit" class="btn btn-primary" name="tambah" >Tambah data mahasiswa</button>
          </form>
        </div>
      </div>
    </div>



