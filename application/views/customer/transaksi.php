<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid #ddd;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="card mx-auto" style="margin-top: 180px">
			<div class="card-header"> Data Transaksi Anda</div>
			<div style="overflow-x:auto;">
				<div class="col-md-12">
					<span class="mt-2 p-2"> <?php echo $this->session->flashdata('pesan') ?></span>
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<tr>
								<th>No</th>
								<th>Nama Customer</th>
								<th>Merk Motor</th>
								<th>No Plat</th>
								<th>Harga Sewa</th>

								<th>Jumlah Pembayaran</th>
								<th>Action</th>
							</tr>


							<?php $no = 1;
							foreach ($transaksi as $tr) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $tr->nama ?></td>
									<td><?php echo $tr->merk ?></td>
									<td><?php echo $tr->no_plat ?></td>
									<td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
									<?php
									$x = strtotime($tr->tanggal_kembali);
									$y = strtotime($tr->tanggal_rental);
									$jmlHari  = abs(($x - $y) / (60 * 60 * 24)); ?>

									<td>Rp. <?php echo number_format($tr->harga * $jmlHari, 0, ',', '.') ?></td>
									<td>
										<?php if ($tr->status_rental  == "Selesai") { ?>
											<button class="btn btn-sm btn-primary">Rental Selesai</button>
											<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
												Testimoni
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h6 class="modal-title" id="exampleModalLabel">Testimoni</h6>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>

														<form method="POST" action="<?php echo base_url('customer/transaksi/testimoni/ ') ?>" enctype="multipart/form-data">

															<div class="modal-body">
																<div class="form-group">
																	<label for="testimoni">Mohon Berikan Pengalaman Anda </label>
																	<input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
																	<input id="testimoni" type="text" class="form-control" name="testimoni">
																</div>
															</div>
															<div class="modal-footer">
																<button type="submit" class="btn btn-primary">Save changes</button>
															</div>
														</form>
													</div>
												</div>
											</div>

										<?php  } else { ?>

											<a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-warning">Pembayaran</a>
											<a onclick="return confirm('Yakin Hapus')" href="<?php echo base_url('customer/transaksi/delete_rental/' . $tr->id_rental) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash mr-1"></i>Hapus</a>
										<?php } ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>