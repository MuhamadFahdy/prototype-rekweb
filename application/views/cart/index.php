<div class="container-fluid">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

<br>
<br>    
    <div class="row mt-5">
        <h3><strong>Shopping Cart</strong></h3>

                 <!--  <form  action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                  </form> -->
        
        <table class="table table-borded table-stripes table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Sub-Total</th>
                <th>Action</th>
            </tr>

                  <!-- end search  -->
            <?php 
            $no=1;
            foreach ($this->cart->contents() as $barang) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $barang['name'] ?></td>
                    <td><?php echo $barang['qty'] ?></td>
                    <td>Rp. <?php echo number_format($barang['price'],  0,',',',')  ?></td>
                    <td>Rp. <?php echo number_format($barang['subtotal'], 0,',',',') ?></td>
                    <td>

                        <a href= "<?= base_url('user/index') ?>">
                            <div class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></div>

                        <a href= "<?= base_url().'cart/delete_cart/'.$barang['rowid']; ?>">
                            <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                    </a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td colspan="4"></td>
                <td>Total: Rp. <?php echo number_format($this->cart->total(), 0,',',',') ?></td>
            </tr>
        </thead>
        </table>
        
        <div class="container">
        <div class="row ml-5">
        <div align="right">

            <a href="<?= base_url('cart/pay') ?>"><button class="btn btn-sm btn-primary mb-3">Pay Now!</button></a>

        </div>
        </div>
        </div>
        
    </div>
</div>