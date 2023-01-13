<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Customer</h1>
		</div>

		<a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Customer</a>
		<?php echo $this->session->flashdata('pesan') ?>

		<table class="table table-bordered table-striped table-hover" style="width:100%" id="tableCustomer">
		<thead>

			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Alamat</th>
				<th>Gender</th>
				<th>No.Telepon</th>
				<th>NIK</th>
				<th>Password</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$no = 1;
			foreach ($customer as $cs) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $cs->nama ?></td>
					<td><?php echo $cs->username ?></td>
					<td><?php echo $cs->alamat ?></td>
					<td><?php echo $cs->gender ?></td>
					<td><?php echo $cs->no_telp ?></td>
					<td><?php echo $cs->nik ?></td>
					<td><?php echo $cs->password ?></td>
					<td>
						<img width="200px" src="<?php echo base_url() . 'assets/upload/foto/' . $cs->foto ?>">
					</td>
					<td>
						
						<a href="<?php echo base_url('admin/data_customer/delete_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
						
						
						<a href="<?php echo base_url('admin/data_customer/update_customer/') . $cs->id_customer ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
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
		$('#tableCustomer').DataTable();
	});
</script>