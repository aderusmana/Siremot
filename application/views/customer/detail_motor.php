<div class="container mt-5 mb-5">

	<div class="card" style="margin-top: 200px">
		<div class="card-body">
			<?php foreach($detail as $dt) :?>
				<div class="row">
					<div class="col-md-6">
						<img style="width:80%" src="<?php echo base_url('assets/upload/motor/'.$dt->gambar) ?>">
					</div>
					<div class="col-md-6">
						<table class="table">
							<tr>
								<td>Merk</td>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<td>No Plat</td>
								<td><?php echo $dt->no_plat?></td>
							</tr>
							<tr>
								<td>Warna</td>
								<td><?php echo $dt->warna ?></td>
							</tr>
							<tr>
								<td>Tahun</td>
								<td><?php echo $dt->tahun ?></td>
							</tr>
							<tr>
								<td>harga</td>
								<td>Rp. <?php echo number_format($dt->harga,0,',','.') ?></td>
							</tr>
							<tr>
								<td>Denda</td>
								<td>Rp. <?php echo number_format($dt->denda ,0,',','.') ?></td>
							</tr>
							<tr>
								<td>Merk</td>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<td>Status</td>
								<td>
									<?php if($dt->status == '1'){
										echo "<span class='badge badge-primary'>Tersedia</span";
									}else{
										echo"<span class='badge badge-danger'>Tidak tersedia</span";
									} ?></td>
							</tr>
							<tr>
								<td>Helm</td>
								<td>
									<?php if($dt->helm == '1'){
									echo "<span class='badge badge-primary'>Tersedia</span";
									}else{
										echo"<span class='badge badge-danger'>Tidak tersedia</span";
									} ?></td>
							</tr>
							<tr>
								<td>Bensin</td>
								<td>
									<?php if($dt->bensin == '1'){
										echo "<span class='badge badge-primary'>Tersedia</span";
									}else{
										echo"<span class='badge badge-danger'>Tidak tersedia</span";
									} ?></td>
							</tr>
							<tr>
								<td>Jas Hujan</td>
								<td>
									<?php if($dt->jas_hujan == '1'){
										echo "<span class='badge badge-primary'>Tersedia</span";
									}else{
										echo"<span class='badge badge-danger'>Tidak tersedia</span";
									} ?></td>
							</tr>
							<tr>
								<td></td>
								<td>
									 <?php 
						                if($dt->status == "0"){
						                  echo "<span class='btn btn-danger' disable>Telah di Sewa</span>";
						                }else{
						                  echo anchor('customer/rental/tambah_rental/'.$dt->id_motor,'<button class="btn btn-success">Sewa</button>');
						                } ?>
								</td>
								
							</tr>
						</table>
				</div>
				</div>
				<?php endforeach ; ?>

		</div>
	</div>
</div>