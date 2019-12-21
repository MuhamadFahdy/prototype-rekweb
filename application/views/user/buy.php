<br>
<br>

<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-2" align="right"></div>
		<div class="col-md-8">
			<div class="card">
                <div class="card-header">
				Input Alamat Pengiriman dan Pembayaran
				</div>

			<div class="card-body">
			<form action="<?= base_url('user/belisatu') ?>" method="post">
					<input type="hidden" name="nama_produk" value="<?= $aaa['nama_barang']; ?>">
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" name="name"  class="form-control" id="name">
						<small class="form-text text-danger"><?= form_error('name'); ?></small>
					</div>

					<div class="form-group">
						<label for="address">Full Address</label>
						<input type="text" name="address" placeholder="Your Full Address" class="form-control" id="address">
						<small class="form-text text-danger"><?= form_error('address'); ?></small>
					</div>

					<div class="form-group">
						<label for="phonenum">Phone Number</label>
						<input type="text" name="phonenum" class="form-control" id="phonenum">
						<small class="form-text text-danger"><?= form_error('phonenum'); ?></small>
					</div>

					<div class="form-group">
						<label for="ship">Shipping Options</label>
						<select class="form-control" id="ship" name="ship">
							<option value="POS INDONESIA">POS INDONESIA</option>
							<option value="FEDEX">FEDEX</option>
							<option value="JNE">JNE</option>
							<option value="GOJEK">GOJEK</option>
							<option value="GRAB">GRAB</option>
						</select>
					</div>

					<div class="form-group">
						<label for="bank">Bank Options</label>
						<select class="form-control" id="bank" name="bank">
							<option value="Bank Maybank Indonesia">Bank Maybank Indonesia</option>
							<option value="Bank Mandiri">Bank Mandiri</option>
							<option value="Bank Negara Indonesia (BNI)">Bank Negara Indonesia (BNI)</option>
							<option VALUE="Bank CIMB Niaga">Bank CIMB Niaga</option>
							<option value="Bank Rakyat Indonesia (BRI)">Bank Rakyat Indonesia (BRI)</option>
							<option value="Bank OCBC NISP">Bank OCBC NISP</option>
						</select>
					</div>

					<button type="submit" name="belisatu" class="btn btn-sm btn-primary float-left">Order Now!</button>
			</form>
			</div>
		</div>

		<div class="col-md-2"></div>
	</div>	
</div>
</div>

<br>