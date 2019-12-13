<div class="container">
    <h4>Shopping Cart</h4>

    <table class="table table-borded table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Total</th>
            <th>Price</th>
            <th>Sub-Total</th>
        </tr>
    
        <? 
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td align="right">Rp. <?php echo number_format($items['price'])  ?></td>
                <td align="right">Rp. <?php echo number_format($items['subtotal']) ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total()) ?></td>
        </tr>
    </table>
</div>