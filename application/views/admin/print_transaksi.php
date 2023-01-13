<p><h3> Soenter Rental Motor</h3>
  Jl. Sunter ,Kelurahan Sunter Jaya , Kecamatan Tanjung Priok , DKI-Jakarta<br>
  Phone: 021-123456789, Mobile: 081954977898<br>
  Email: <a href="mailto:contact@javawebmedia.com"></a>, aderusmana777@gmail.com<br>
  Website: www.siremot.com</p>

<center><h2>Kwitansi Bukti Selesai Rental</h2></center>

<br>
<br>
<br>
<br>
<br>
<br>



<p>Tanggal   :   <?php echo date('d-M-Y') ?></p>
 <table class="table1  table-hover" style="width: 100%" >
        <?php 
        foreach($transaksi as $tr): ?>
           <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
          </tr>
           <tr>
            <td>No.KTP</td>
            <td>:</td>
            <td><?php echo $tr->nik ?></td>
          </tr>
          <tr>
            <td>No.Telepon</td>
            <td>:</td>
            <td><?php echo $tr->no_telp ?></td>
          </tr>
          <tr>
            <td>Merk Motor</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
          </tr>
          <tr>
            <td>No Polisi</td>
            <td>:</td>
            <td><?php echo $tr->no_plat ?></td>
          </tr>

          <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
          </tr>

          <tr>
            <td>Tanggal kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
          </tr>

          <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
          </tr>
 <tr>
            <?php 
                $v = $tr->harga;
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari  = abs(($x - $y)/(60*60*24));
                $subtotal = $v * $jmlHari ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jmlHari ?> Hari</td>
          </tr>
<tr>
            <td>Sub total Pembayaran </td>
            <td>:</td>
            <td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
          </tr>

            <tr>
            <td><b>Tambahan  : </b></td>
          </tr>

          <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
          </tr>

          <tr>
            <td>Tanggal Pengembalian</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_pengembalian ?></td>
          </tr>

          <tr>
            <td>Denda Keterlambatan</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->denda,0,',','.') ?></td>
          </tr>
 <tr>
            <?php 
                $x = strtotime($tr->tanggal_pengembalian);
                $y = strtotime($tr->tanggal_kembali);
                $lebihHari  = abs(($x - $y)/(60*60*24)); ?>
            <td>Jumlah Hari Lebih</td>
            <td>:</td>
            <td><?php echo $lebihHari ?> Hari</td>
          </tr>

            <tr>
            <td>Total Denda Keterlambatan</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->total_denda,0,',','.') ?></td>
          </tr>

          <tr>
            <td>Total Sewa Keterlambatan </td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga*$lebihHari,0,',','.') ?></td>
          </tr>
           <tr>
            <td></td>
            <td></td>
            <td>-------------------------------------</td>
          </tr>

<tr>
            <td></td>
            <td><b>Total Pembayaran :</td>
            <?php  
                $z = abs($tr->total_denda);
				        $x = strtotime($tr->tanggal_pengembalian);
                $y = strtotime($tr->tanggal_rental);
                $totalHari  = abs(($x - $y)/(60*60*24)); 
                $total = $z +$tr->harga*$totalHari 
                ?>
            <td><b>Rp. <?php echo number_format($total ,0,',','.') ?></td>
          </tr>
          <tr>
            <td></td>
            <td><b>Sudah DiBayar :</td>
            <td><b>Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></td>
          </tr>

           <tr>
            <td></td>
            <td></td>
            <td>-------------------------------------</td>
          </tr>

           <tr>
            <td></td>
            <td><b>Sisa :</td>
            <td><b>Rp. <?php echo number_format($total - $subtotal,0,',','.') ?></td>
          </tr>

          <tr><td></td></tr>
	
	<tr><td></td></tr><tr><td></td></tr>
	<tr><td></td></tr>
	
	
<tr>
	<td></td>
	<td></td>
	<td></td>
  <td></td>

	<td>Jakarta,.........................</td>
</tr>
<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>Tanda Tangan</td>
</tr>
<tr>
	<td>Penyewa</td>
	<td></td>
	<td></td>
	<td></td>
	<td>Admin</td>
</tr>
<tr><td></td></tr>
	<tr><td></td></tr>
	
	<tr><td></td></tr><tr><td></td></tr>
	<tr><td></td></tr>
		<tr>
	<td>(...................)</td>
	<td></td>
	<td></td>
	<td></td>
	<td>(...................)</td>
</tr>


          
      <?php endforeach; ?>
        
        </table>
      



		<script type="text/javascript">
			window.print();
		</script>