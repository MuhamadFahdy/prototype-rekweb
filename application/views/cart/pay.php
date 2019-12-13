<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-2" align="right"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success mt-4">
				<?php
				$grand_total = 0;
				if ($cart = $this->cart->contents()) 
				{
					foreach ($cart as $barang)
					{
						$grand_total = $grand_total + $barang['subtotal'];
					}

				echo "<h6>TOTAL: ".number_format($grand_total, 0,',',',');
				?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>


			<form method="post" action="<?= base_url() ?> cart/order_process">

					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="name" placeholder="Your Full Name" class="form-control">
					</div>

					<div class="form-group">
						<label>Full Address</label>
						<input type="text" name="address" placeholder="Your Full Address" class="form-control">
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phone" placeholder="Your Phone Number" class="form-control">
					</div>

					<div class="form-group">
						<label>Shipping Options</label>
						<select class="form-control">
							<option>POS INDONESIA</option>
							<option>FEDEX</option>
							<option>JNE</option>
							<option>GOJEK</option>
							<option>GRAB</option>
						</select>
					</div>

					<div class="form-group">
						<label>Bank Options</label>
						<select class="form-control">
							<option>Bank Maybank Indonesia</option>
							<option>Bank Mandiri</option>
							<option>Bank Negara Indonesia (BNI)</option>
							<option>Bank CIMB Niaga</option>
							<option>Bank Rakyat Indonesia (BRI)</option>
							<option>Bank OCBC NISP</option>
						</select>
					</div>

					<button type="submit" class="btn btn-sm btn-dark mb-3">Order!</button>
			</form>
			<?php 
		} else
			{
				echo "<h4>You have no item in your cart";
			}
				?>
		</div>

		<div class="col-md-2"></div>
	</div>	
</div>