<h3 style="text-align: center">Laporan Transaksi Rental Motor</h3>

<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['dari']));?></td>
	</tr>
<p style="text-align: right">Admin  :  <?php echo $this->session->userdata('nama_admin') ?></p>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['sampai']));?></td>
	</tr>
</table>

<table class=" table table-bordered table-striped mt-4">
 <thead>
		<tr>
			<th>No</th>
			<th>Customer</th>
			<th>Motor</th>
			<th>Tgl. Rental</th>
			<th>Tgl. Kembali</th>
			<th>Tgl. Pengembalian</th>
			<th>Harga/Hari</th>
			<th>SubTotal Pembayaran</th>
			<th>Denda/Hari</th>
			<th>Total Denda</th>
			<th>Total Pembayaran</th>
			<th>Status Pengembalian</th>
			<th>Status Rental</th>
		</tr>
 </thead>
          <tbody>
		<?php  $no=1;
		foreach ($laporan as $tr): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $tr->nama ?></td>
				<td><?php echo $tr->merk ?></td>
				<td><?php echo date('d/m/Y',strtotime($tr->tanggal_rental)) ?></td>
				<td><?php echo date('d/m/Y',strtotime($tr->tanggal_kembali)) ?></td>
				<td><?php 
				if($tr->tanggal_pengembalian =="0000-00-00"){
					echo "-";
				}else{
					echo date('d/m/Y',strtotime($tr->tanggal_pengembalian)); 
				}
				?>	</td>
				<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>

				<?php 
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari  = abs(($x - $y)/(60*60*24)); ?>
				<td>Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></td>
				<td>Rp. <?php echo number_format($tr->denda,0,',','.') ?></td>
				<td>Rp. <?php echo number_format($tr->total_denda,0,',','.') ?></td>
				<?php  
				$x = strtotime($tr->tanggal_pengembalian);
                $y = strtotime($tr->tanggal_rental);
                $totalHari  = abs(($x - $y)/(60*60*24)); ?>
				<td>Rp. <?php echo number_format($tr->total_denda +$tr->harga*$totalHari ,0,',','.') ?></td>
				

				<td>
					<?php 
					if($tr->status_pengembalian == "Kembali"){
						echo "Kembali";
					}else{
						echo "Belum Kembali";
					} ?>
				</td>

				<td>
					<?php 
					if($tr->status_rental == "Selesai"){
						echo "Selesai";
					}else{
						echo "Belum Selesai";
					} ?>
				</td>
			</tr>
			<?php endforeach; ?>
			 </tbody>
          <tfoot>
		</table>
	</tfoot>
</table>

		<script type="text/javascript">
			window.print();
		</script>