<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/admin/') ?>/assets/img/logo2.png" alt="logo" width="300" >
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

               

              <div class="card-body">
                 <?php echo form_open_multipart('register'); ?>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                      <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" class="d-block">Jenis Kelamin</label>
                      <select class="form-control" name="gender">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                      <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="no_telp" class="d-block">No.Telepon</label>
                      <input id="no_telp" type="number" class="form-control" name="no_telp">
                       <?php echo form_error('no_telp','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label>NIK</label>
                      <input type="number" name="nik" class="form-control">
                      <?php echo form_error('nik','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Upload KTP/SIM</label>
                    <input type="file" name="foto" class="form-control">
                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
               <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</body>
            <div class="simple-footer">
              Copyright &copy; SiReMoT 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <

 
