<p><h3> Soenter Rental Motor</h3>
  Jl. Sunter ,Kelurahan Sunter Jaya , Kecamatan Tanjung Priok , DKI-Jakarta<br>
  Phone: 021-123456789, Mobile: 081954977898<br>
  Email: <a href="mailto:contact@javawebmedia.com"></a>, aderusmana777@gmail.com<br>
  Website: www.siremot.com</p>
<center>==============================</center>
<center><h2>  Invoice Pembayaran </h2></center>
<center>==============================</center>
<br>
<br>
<br>
<br>
<br>
<br>


        <table class="table table-bordered table-hover" style="width: 100%" border="1" width="100%">
        <?php 
        foreach($transaksi as $tr): ?>
           <tr>
            <th>Nama Customer</th>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
          </tr>
           <tr>
            <th>No.KTP</th>
            <td>:</td>
            <td><?php echo $tr->nik ?></td>
          </tr>
          <tr>
            <th>No.Telepon</th>
            <td>:</td>
            <td><?php echo $tr->no_telp ?></td>
          </tr>
          <tr>
            <th>Merk Motor</th>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
          </tr>
          <tr>
            <th>No Polisi</th>
            <td>:</td>
            <td><?php echo $tr->no_plat ?></td>
          </tr>

          <tr>
            <th>Tanggal Rental</th>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
          </tr>

          <tr>
            <th>Tanggal kembali</th>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
          </tr>

          <tr>
            <th>Biaya Sewa/Hari</th>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
          </tr>

           <tr>
            <th>Status Pembayaran</th>
            <td>:</td>
            <td><?php if($tr->status_pembayaran == "0"){
              echo "Belum Lunas";
            }else{
              echo "Lunas";
            } ?></td>
          </tr>

          <tr>
            <?php 
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari  = abs(($x - $y)/(60*60*24)); ?>
            <th>Jumlah Hari Sewa</th>
            <td>:</td>
            <td><?php echo $jmlHari ?> Hari</td>
          </tr>


          <tr style="font-weight: bold ;color: red  ">
            <th>Jumlah Pembayaran </th>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></td>
          </tr>
          
      <?php endforeach; ?>
        
        </table>

        
      <script type="text/javascript">
        window.print();
      </script>