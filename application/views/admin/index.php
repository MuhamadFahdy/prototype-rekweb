<div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Daftar Mahasiswa</h1>


            <a href="<?= base_url('admin/tambah')?>" class="btn btn-success col-lg-5">Tambah</a>

            <hr>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($barang as $key ) : {
                      # code...
                    } ?>
                        <tr>
                        <th scope="row">1</th>
                        <td><?= $key['nama_barang'] ?></td>
                        <td><?= $key['deskripsi_barang'] ?></td>
                        <td><?= $key['harga_barang'] ?></td>
                        <td><?= $key['img_barang'] ?></td>
                        <td>
                        <a href="<?=base_url()?>admin/ubah/<?= $key['id'];?>" class="btn btn-success">ubah</a>
                        <a href="<?=base_url()?>admin/hapus/<?= $key['id'];?>" class="btn btn-danger">hapus</a>
                        </td>
                        </tr>
                     <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>