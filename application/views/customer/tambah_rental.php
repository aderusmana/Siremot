<div class="container">

	<div class="card" style="margin-top: 200px; margin-bottom: 50px">

		<div class="card-header">
			<h1> Rental Motor </h1>
		</div>

		<div class="card-body">
			<?php foreach ($detail as $dt) : ?>
				<form method="POST" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">

					<div class="row">
						<div class="col-md-6">
							<img style="width:80%" src="<?php echo base_url('assets/upload/motor/' . $dt->gambar) ?>">
						</div>
						<div class="col-md-6">
							<h2>Informasi Motor</h2>
							<table class="table">
								<tr>
									<td><b>Merk</td>
									<td><b><?php echo $dt->merk ?></td>
								</tr>
								<tr>
									<td><b>No Plat</td>
									<td><b><?php echo $dt->no_plat ?></td>
								</tr>
								<tr>
									<td><b>Harga / Hari</td>
									<td><b>Rp. <?php echo number_format($dt->harga, 0, ',', '.') ?></td>
								</tr>
								<tr>
									<td><b>Denda / Hari</td>
									<td><b>Rp. <?php echo number_format($dt->denda, 0, ',', '.') ?></td>
								</tr>
								<tr>
									<td><b>Status</td>
									<td><b>
											<?php if ($dt->status == '1') {
												echo "<span class='badge badge-primary'>Tersedia</span";
											} else {
												echo "<span class='badge badge-danger'>Tidak tersedia</span";
											} ?></td>
								</tr>
								<tr>
									<td><b>Helm</td>
									<td><b>
											<?php if ($dt->helm == '1') {
												echo "<span class='badge badge-primary'>Tersedia</span";
											} else {
												echo "<span class='badge badge-danger'>Tidak tersedia</span";
											} ?></td>
								</tr>
								<tr>
									<td><b>Bensin</b></td>
									<td><b>
											<?php if ($dt->bensin == '1') {
												echo "<span class='badge badge-primary'>Tersedia</span";
											} else {
												echo "<span class='badge badge-danger'>Tidak tersedia</span";
											} ?></b></td>
								</tr>
								<tr>
									<td><b>Jas Hujan</b></td>
									<td><b>
											<?php if ($dt->jas_hujan == '1') {
												echo "<span class='badge badge-primary'>Tersedia</span";
											} else {
												echo "<span class='badge badge-danger'>Tidak tersedia</span";
											} ?></b></td>
								</tr>
						</div>
						</table>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Harga Sewa/Hari</label>
							<input type="hidden" name="id_motor" value="<?php echo $dt->id_motor ?>">
							<input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
						</div>

						<div class="form-group">
							<label>Denda/Hari</label>
							<input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
						</div><br>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tanggal Rental</label>
							<input type="date" name="tanggal_rental" class="form-control">
							<?php echo form_error('tanggal_rental', '<div class="text-small text-danger">', '</div>') ?>
						</div>

						<div class="form-group">
							<label>Tanggal Kembali</label>
							<input type="date" name="tanggal_kembali" class="form-control">
							<?php echo form_error('tanggal_kembali', '<div class="text-small text-danger">', '</div>') ?>
						</div><br>
						<button type="submit" class="btn btn-warning btn-md">Rental</button </form>

					<?php endforeach; ?>
					</div>
		</div>
	</div>
</div>
</div>