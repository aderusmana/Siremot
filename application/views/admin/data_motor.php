<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Motor</h1>
		</div>
		<a href="<?php echo base_url('admin/data_motor/tambah_motor') ?>" class="btn btn-primary mb-3">Tambah Motor</a>
		<?php echo $this->session->flashdata('pesan') ?>
		<table class="table table-hover table-striped table-bordered" id="tableMotor">
			<thead>
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Type</th>
					<th>Merk</th>
					<th>No Plat</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($motor as $m) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td>
							<img width="100px" src="<?php echo base_url() . 'assets/upload/motor/' . $m->gambar ?>">
						</td>
						<td><?php echo $m->kode_type ?></td>
						<td><?php echo $m->merk ?></td>
						<td><?php echo $m->no_plat ?></td>
						<td><?php
							if ($m->status == "0") {
								echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
							} else {
								echo "<span class='badge badge-primary'> Tersedia</span>";
							} ?></td>
						<td>

							<a href="<?php echo base_url('admin/data_motor/detail_motor/') . $m->id_motor ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
							<a href="<?php echo base_url('admin/data_motor/delete_motor/') . $m->id_motor ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
							<a href="<?php echo base_url('admin/data_motor/update_motor/') . $m->id_motor ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
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
		$('#tableMotor').DataTable();
	});
</script>