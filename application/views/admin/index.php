<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Product List</h3>

                <form  action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                </form>
                <br>

                <a href="<?= base_url('admin/tambah')?>" class="btn btn-dark col-lg-3 mb-3"><i class="fas fa-plus fa-sm"></i> Add Product</a>
                
                <a href="<?= base_url('admin/order')?>" class="btn btn-primary col-lg-3 mb-3"><i class="fas fa-list fa-sm"></i> See Order</a>
                
                <table class="table table-striped table-bordered col-auto">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" style="text-align:center">No.</th>
                        <th scope="col" style="text-align:center">Product Name</th>
                        <th scope="col" style="text-align:center">Product Description</th>
                        <th scope="col" style="text-align:center">Product Price</th>
                        <th scope="col" style="text-align:center">Product Brand</th>
                        <th scope="col" style="text-align:center">Product Category</th>
                        <th scope="col" style="text-align:center">Product Image</th>
                        <th colspan="2" style="text-align:center">Action</th>
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
                       

                        <td><a href="<?= base_url('admin/ubah/')?><?= $key['id_barang'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></td>

                        <td><a href="<?= base_url('admin/hapus/')?><?= $key['id_barang'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
                        </tr>

                     <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
                
                <?php if(empty($barang) ) : ?>
                    <div class="alert alert-danger" role="alert">
                    Data Barang Tidak ditemukan
                    </div>
                <?php endif; ?>
    </div>
