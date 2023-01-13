<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>

		<table class="table table-bordered table-striped " id="tableTransaksi">
<thead>
	
	<tr>
		<th>No</th>
		<th>Customer</th>
		<th>Motor</th>
		<th>Tgl. Rental</th>
		<th>Tgl. Kembali</th>
		<th>Tgl. Pengembalian</th>
		<th>Harga/Hari</th>
		<th>Denda/Hari</th>
		<th>Total Denda</th>
		<th>Total Pembayaran</th>
		<th>Status Pengembalian</th>
				<th>Status Rental</th>
				<th>Cek Pembayaran</th>
				<th>Action</th>
			</tr>
		</thead>
<tbody>

	<?php $no = 1;
			foreach ($transaksi as $tr) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->nama ?></td>
					<td><?php echo $tr->merk ?></td>
					<td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
					<td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
					<td><?php
						if ($tr->tanggal_pengembalian == "0000-00-00") {
							echo "-";
						} else {
							echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
						}
						?> </td>
					<td>Rp. <?php echo $tr->harga, ',', '.' ?></td>
					
					<td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
					<td>Rp. <?php echo number_format($tr->total_denda, 0, ',', '.') ?></td>
					<?php
					$x = strtotime($tr->tanggal_kembali);
					$y = strtotime($tr->tanggal_rental);
					$jmlHari  = abs(($x - $y) / (60 * 60 * 24)); ?>
					<td>Rp. <?php echo number_format($tr->total_denda + $tr->harga * $jmlHari, 0, ',', '.') ?></td>
					
					
					<td>
						<?php
						if ($tr->status_pengembalian == "Kembali") {
							echo "Kembali";
						} else {
							echo "Belum Kembali";
						} ?>
					</td>
					
					<td>
						<?php
						if ($tr->status_rental == "Selesai") {
							echo "Selesai";
						} else {
							echo "Belum Selesai";
						} ?>
					</td>
					<td>
						<center>
							<?php
							if (empty($tr->bukti_pembayaran)) { ?>
								<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
								<?php } else { ?>
								<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_rental) ?>"><i class="fas fa-check-circle"></i></a>
								<?php } ?>
							</center>
							
						</td>
						
					<td> <?php
							if ($tr->status == "1") {
								echo "-";
							} else { ?>

<div class="row">
	<a class="btn btn-sm btn-success " href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental) ?>"><i class="fas fa-check"></i></a>
								<a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/delete_rental/' . $tr->id_rental) ?>"><i class="fas fa-times"></i></a>
							<?php  } ?>

							<?php if ($tr->status_rental == 'Selesai') { ?>
								<a class="btn btn-sm btn-primary " href="<?php echo base_url('admin/transaksi/print_transaksi/' . $tr->id_rental) ?>" target="_blank"><i class="fas fa-print"></i></a>
								
								<?php } ?>
								
								
							</div>
							
							
						</td>
						
					</tr>
					<?php endforeach; ?>
				</tbody>
		</table>
	</section>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tableTransaksi').DataTable();
	});
</script>