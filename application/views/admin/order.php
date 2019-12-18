<div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-3">Product List</h3>
                  <form  action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                  </form>
                 <a href="<?= base_url('admin/index')?>" class="btn btn-dark col-lg-3 mb-3"><i class=""></i>kembali</a>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" style="text-align:center">No.</th>
                        <th scope="col" style="text-align:center">Name</th>
                        <th scope="col" style="text-align:center">address</th>
                        <th scope="col" style="text-align:center">phonenum</th>
                        <th scope="col" style="text-align:center">ship</th>
                        <th scope="col" style="text-align:center">bank</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                    $no=1;
                    foreach ($pembeli as $key ) : ?>
                    
                        <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key['name'] ?></td>
                        <td><?= $key['address'] ?></td>
                        <td><?= $key['phonenum'] ?></td>
                        <td><?= $key['ship'] ?></td>
                        <td><?= $key['bank'] ?></td>
                     <?php endforeach ?>
                    </tbody>
                </table>
            </div>
       
