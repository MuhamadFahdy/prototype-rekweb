
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>
          <h3>Form Add Products</h3>
          <form method="post" action="<?= base_url()?>Admin/tambahkan" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nama_barang">nama_barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                <small><?= form_error('nama_barang') ?></small> 

                <label for="deskripsi_barang">deskripsi_barang</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
                <small><?= form_error('deskripsi_barang') ?></small> 

 
                <label for="harga_barang">harga_barang</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                <small><?= form_error('harga_barang') ?></small> 


                <label>Masukan Image</label>
                <div>
                    <input type="file" for="img" name="img">
                </div>
                <br>

              <button type="submit" class="btn btn-primary" name="tambahkan" >Tambah data mahasiswa</button>
          </form>
        </div>
      </div>
    </div>



