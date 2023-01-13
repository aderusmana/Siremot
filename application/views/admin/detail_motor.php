<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Motor</h1>
          </div>
        </section>

        <?php foreach($detail as $dt) : ?>
        	<div class="card" >
        		<div class="card-body">
        		  <div class="row">
        		  	<div class="col-md-5">
        		  		<img width="500px" src="<?php echo base_url().'assets/upload/motor/'. $dt->gambar ?>">
        		  	</div>
        		  	<div class="col-md-6">
        		  		<table class="table">
        		  			<tr>
        		  				<td>Type Motor</></td>
        		  				<td>
        		  				<?php

        		  				if($dt->kode_type =="SPO"){
        		  					echo "Sport";
        		  				}elseif($dt->kode_type == "SKT"){
        		  					echo "Skuter Matic";
                                }elseif($dt->kode_type == "BBK"){    
                                    echo "Bebek";
        		  				}else{
        		  					echo "<span class='text-danger'>Type Motor tidak ada</span>";
        		  				} ?>
        		  				</></td>
        		  			</tr>
        		  			<tr>
        		  				<td>Merk</td>
        		  				<td><?php echo $dt->merk ?></></td>
        		  			</tr>
        		  			<tr>
        		  				<td>NO Plat</td>
        		  				<td><?php echo $dt->no_plat ?></></td>
        		  			</tr>
        		  			<tr>
        		  				<td>Warna</td>
        		  				<td><?php echo $dt->warna ?></></td>
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
        		  				<td>Tahun</td>
        		  				<td><?php echo $dt->tahun ?></></td>
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
        		  				<td>Status</td>
        		  				<td><?php 
        		  				if($dt->status =="0"){
        		  					echo "<span class='badge badge-danger'>Tidak Tersedia</span";
        		  				}else{
        		  					echo "<h5><span class='badge badge-danger'>Tersedia</span</h5>";
        		  				}
        		  				?></></td>
        		  			</tr>
        		  		</table>

                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_motor') ?>">Kembali</a>
                         <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_motor/update_motor/'.$dt->id_motor) ?>">Update</a>
        		  </div>

        		</div>
        	</div>
<?php endforeach; ?>

</div>          