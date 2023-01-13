<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Laporan Transaksi</h1>
          </div>

         </section>

         <form method="POST" action="<?php echo base_url('admin/laporan')  ?>">
         	<div class="form-group">
         		<label>Dari Tanggal</label>
         		<input type="date" name="dari" class="form-control">
         		 <?php echo form_error('dari','<div class="text-small text-danger">','</div>') ?>

         	</div>

         	<div class="form-group">
         		<label>Sampai Tanggal</label>
         		<input type="date" name="sampai" class="form-control">
         		 <?php echo form_error('sampai','<div class="text-small text-danger">','</div>') ?>

         	</div>
             <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye mr-2"></i>Tampilkan Data</button>
          </form> <hr>

              <div class="btn-group ">
                <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print mr-2"></i>Print</a>
            </div>
              
          

		<table class="table-responsive table table-bordered table-striped mt-4  ">
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
                $jmlHari  = abs(($x - $y)/(60*60*24)); ?>
				<td>Rp. <?php echo number_format($tr->total_denda +$tr->harga*$jmlHari ,0,',','.') ?></td>

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
	</section>
</div>
     </div>