
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>

          <h4><strong>Form Add Products</strong></h4>

          <form method="post" action="<?= base_url()?>Admin/tambahkan" enctype="multipart/form-data">
              <div class="form-group">

                <label for="nama_barang">Product Name</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                <small><?= form_error('nama_barang') ?></small> 

                <br>
                <label for="deskripsi_barang">Product Description</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
                <small><?= form_error('deskripsi_barang') ?></small> 

                <br>
                <label for="brand_barang">Product Brand</label>
                <input type="text" class="form-control" id="brand_barang" name="brand_barang">
                <small><?= form_error('brand_barang') ?></small> 

                <br>
                <label for="category_barang">Product Category</label>
                <input type="text" class="form-control" id="category_barang" name="category_barang">
                <small><?= form_error('category_barang') ?></small> 

                <br>
                <label for="harga_barang">Product Price</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                <small><?= form_error('harga_barang') ?></small> 

                <br>
                <label>Insert Image</label>
                <div>
                    <input type="file" for="img" name="img">
                </div>
                <br>

                <a href="<?= base_url('admin/index')?>" class="btn btn-dark"><i class=""></i>Back</a>

                <button type="submit" class="btn btn-primary" name="tambahkan" >Add New Product</button>
          </form>
        </div>
      </div>
    </div>



