<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-8">
      <div class="card" style="margin-top: 150px">
        <div class="card-header alert alert-success"> Invoice Pembayaran Anda</div>
      </div>

      <div class="card-body">
        <table class="table">
        <?php 
        foreach($transaksi as $tr): ?>
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
            <?php 
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jmlHari  = abs(($x - $y)/(60*60*24)); ?>
            <th>Jumlah Hari Sewa</th>
            <td>:</td>
            <td>Rp. <?php echo $jmlHari ?> Hari</td>
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


          <tr class="text_success">
            <th>Jumlah Pembayaran </th>
            <td>:</td>
            <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></button></td>
          </tr>
          <tr>
            
          <td></td>
          <td></td>
          <?php if($tr->status_pembayaran == '1'){?>
                 <td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/' .$tr->id_rental) ?>" class="btn btn-sm btn-primary" target="_blank">Print Invoice</a></td>
                <?php } ?> 
         
          </tr>
      <?php endforeach; ?>
        
        </table>
      </div>
    </div>
  
    <div class="col-md-4">
      <div class="card" style="margin-top: 150px">
        <div class="card-header alert alert-primary"  >Informasi Pembayaran</div> 

        <div class="card-body">
            <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui No.Rekening Dibawah Ini :</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Bank Mandiri  : 0700 000 899 992</li>
              <li class="list-group-item">Bank Bca    :  877 3623 4521</li>
              <li class="list-group-item">A/N             :    Ade Rusmana </li>

            </ul>

            <?php 
              if(empty($tr->bukti_pembayaran)) { ?> 

                <!-- Button trigger modal -->
            <button style= "width :100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
              Upload Bukti Pembayaran
            </button>

              <?php  }elseif($tr->status_pembayaran == '0'){?>
              <button style="width: 100%"  class="btn  btn-warning mt-3"><i class="fa fa-clock-o">  Menunggu Konfirmasi</i></button>  
               <li class="list-group-item">Catatan : Silahkan Mengunggu Admin Mengkonfirmasi Pembayaran Anda ± 5 menit,Harap Cek website secara berkala. </li>
              
                <?php }elseif($tr->status_pembayaran == '1'){?>
                <button style="width: 100%" type="button" class="btn  btn-success mt-3"><i class="fa fa-check">  Pembayaran Selesai</i></button>
                <li class="list-group-item">Catatan : Silahkan Cetak invoice sebagai bukti pembayaran Sah kami,dan mohon dibawa saat pengambilan motor </li>
                <?php } ?> 
        </div>  
    </div>
    </div>
  </div>
  </div>


<!-- Modal unruk upload bukti_pembayaran pembayaran -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi/
  ') ?>" enctype="multipart/form-data">
      
<div class="modal-body">
<div class="form-group">
  <label>Upload Bukti Pembayaran</label>
  <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
  <input type="file" name="bukti_pembayaran" class="form-control">
</div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
       </div>
      
 </form>

    </div>
  </div>
</div>