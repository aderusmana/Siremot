<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Motor</h1>
          </div>
          <div class="row">
          <div class="card"></div>
          	<div class="card-body">

                    <form method="POST" action="<?php echo base_url('admin/data_motor/tambah_motor_aksi') ?>" enctype="multipart/form-data">
          		
          			<div class="col-12 col-md-6 col-lg-6">
          				<div class="form-group">
          					<label>Type Motor</label>
          				<select  class="form-control form-control-sm"name="kode_type">
          						<option value=""> Pilih Type Motor</option>
          						<?php foreach($type as $tp) : ?>
          							<option value="<?php echo $tp->kode_type ?>"> <?php echo $tp->nama_type ?></option>
          							<?php endforeach; ?>
          					</select>

                                   <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
          				</div>
          				<div class="form-group">
          					<label>Merk</label>
          					<input type="text" class="form-control form-control-sm" name="merk">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>No Plat</label>
          					<input type="text" class="form-control form-control-sm" name="no_plat">
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				
                              <div class="form-group">
                                   <label>Warna</label>
                                   <input type="text"  class="form-control form-control-sm "name="warna">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Helm</label>
                                   <select  class="form-control form-control-sm"name="helm">
                                        <option value=""> Pilih Status Helm</option>
                                        <option value="1"> Tersedia</option>
                                        <option value="0"> Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('helm','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Bensin</label>
                                   <select  class="form-control form-control-sm"name="bensin">
                                        <option value=""> Pilih Status Bensin</option>
                                        <option value="1"> Tersedia</option>
                                        <option value="0"> Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('bensin','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Jas HUjan</label>
                                   <select  class="form-control form-control-sm"name="jas_hujan">
                                        <option value=""> Pilih Status Jas Hujan</option>
                                        <option value="1"> Tersedia</option>
                                        <option value="0"> Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('jas_hujan','<div class="text-small text-danger">','</div>') ?>
                              </div>
    
          			 </div>
          			       <div class="col-md-6">
                       <div class="form-group">
                                   <label>Tahun</label>
                                   <input type="number" class="form-control form-control-sm" name="tahun">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               <div class="form-group">
                                   <label>Harga Sewa/Hari</label>
                                   <input type="number" class="form-control form-control-sm" name="harga">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>

                                     <div class="form-group">
                                   <label>Denda</label>
                                   <input type="number" class="form-control form-control-sm" name="denda">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>

                              <div class="form-group">
                                   <label>Status</label>
                                   <select  class="form-control form-control-sm"name="status">
                                        <option value=""> Pilih Status</option>
                                        <option value="1"> Tersedia</option>
                                        <option value="0"> Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Gambar</label>
                                   <input type="file" class="form-control form-control-sm" name="gambar">

                              </div>
                                   
                                   <button type="submit" class="btn btn-primary">SIMPAN</button>
                                   <button type="reset" class="btn btn-danger">Reset</button>
                         </div>
          		</div>
                    </form>
          	</div>
          </div>
          	
      </section>
  </div>