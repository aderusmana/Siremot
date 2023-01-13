<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Data Customer</h1>
          </div><div class="row">
          <div class="card"></div>
            <div class="card-body">
              <?php foreach ($customer as $cs) : ?>

                   <?php echo form_open_multipart('admin/data_customer/update_customer_aksi'); ?>
               
                  <div class="col-12 col-md-6 col-lg-6">
                     <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                     <input type="text"  class="form-control form-control-sm"name="nama" value="<?php echo $cs->nama ?>">
                        <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                     </div>
                     <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>

                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control form-control-sm" name="username" value="<?php echo $cs->username ?>">
                                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                     </div>

                     <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control form-control-sm" name="alamat" value="<?php echo $cs->alamat ?>">
                                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                     </div>

                     
                              <div class="form-group">
                                   <label>Gender</label>
                                   <select type="text"  class="form-control form-control-sm "name="gender" value="<?php echo $cs->gender ?>">
                                    <option value=""><?php echo $cs->gender ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan"> Perempuan</option></select>
                                    <?php echo form_error('Gender','<div class="text-small text-danger">','</div>') ?>
                              </div>
    
                  
                               <div class="form-group">
                                   <label>No.Telepon</label>
                                   <input type="text" class="form-control form-control-sm" name="no_telp" value="<?php echo $cs->no_telp ?>">
                                    <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>NIK</label>
                                   <input type="text" class="form-control form-control-sm" name="nik" value="<?php echo $cs->nik ?>">
                                    <?php echo form_error('nik','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               <div class="form-group">
                                   <label>Password</label>
                                   <input type="pasword" class="form-control form-control-sm" name="password" value="<?php echo $cs->password ?>">
                                    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Foto KTP</label>
                                   <input type="file" id="foto" class="form-control form-control-sm" name="foto">

                              </div>

                              
                                   
                                   <button type="submit" class="btn btn-primary">SIMPAN</button>
                                   <button type="reset" class="btn btn-danger">Reset</button>
                         </div>
               </div>
                    <?php echo form_close(); ?>
                  <?php endforeach; ?>
            </div>
          </div>
            
      </section>
  </div>