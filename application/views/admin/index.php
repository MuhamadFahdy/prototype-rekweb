<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Product List</h3>

            <a href="<?= base_url('admin/tambah')?>" class="btn btn-dark col-lg-3 mb-3" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus fa-sm"></i> Add Product</a>

                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" style="text-align:center">No.</th>
                        <th scope="col" style="text-align:center">Product Name</th>
                        <th scope="col" style="text-align:center">Product Description</th>
                        <th scope="col" style="text-align:center">Product Price</th>
                        <th scope="col" style="text-align:center">Product Brand</th>
                        <th scope="col" style="text-align:center">Product Category</th>
                        <th scope="col" style="text-align:center">Product Image</th>
                        <th colspan="3" style="text-align:center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                    $no=1;
                    foreach ($barang as $key ) : ?>
                    
                        <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key['nama_barang'] ?></td>
                        <td><?= $key['deskripsi_barang'] ?></td>
                        <td><?= $key['harga_barang'] ?></td>
                        <td><?= $key['brand_barang'] ?></td>
                        <td><?= $key['category_barang'] ?></td>
                         <td><?= $key['img_barang'] ?></td>
                       
                        <td><a href="<?= base_url('admin/tambah')?>" class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>

                        <td><a href="<?= base_url('admin/ubah')?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></td>

                        <td><a href="<?= base_url('admin/hapus')?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
                        </tr>

                     <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

       <!-- Modal -->
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form action="<= base_url(). 'admin/tambah'; ?>" method="post" enctype="multipart/form-data">
                    
                <div class="form-group">
                <label for="nama_barang">Product Name</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                <small><?= form_error('nama_barang') ?></small>
                <br>
                
                <label for="deskripsi_barang">Product Description</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
                <small><?= form_error('deskripsi_barang') ?></small>
                <br>

                <label for="harga_barang">Product Price</label>
                <input type="text" class="form-control" id="harga_barang" name="harga_barang">
                <small><?= form_error('harga_barang') ?></small>
                <br>

                <label for="brand_barang">Product Brand</label>
                <input type="text" class="form-control" id="brand_barang" name="brand_barang">
                <small><?= form_error('brand_barang') ?></small>
                <br>

                <label for="category_barang">Product Brand</label>
                <input type="text" class="form-control" id="category_barang" name="category_barang">
                <small><?= form_error('category_barang') ?></small>
                <br>

                <label>Product Image</label>
                <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <input type="file" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload'/>
                        </div>
                    </form>
                </br>
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
