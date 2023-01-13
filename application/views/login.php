<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/admin/') ?>/assets/img/logo2.png" alt="logo" width="300" >
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
           <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>" >
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" placeholder="username" tabindex="1" autofocus>

                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                   
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label> 
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="password" tabindex="2">

                      <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                    

                 
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</body>
                

              </div>
            </div>
             <script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo base_url('register') ?>">Create One</a>
            </div>
          
            <div class="simple-footer">
              Copyright &copy; SiReMoT 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>