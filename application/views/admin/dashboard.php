      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><i class="fa fa-home "></i> Dashboard</h1>
          </div>
          <div class="row text-white">
            <div class="card bg-info ml-5" style="width: 20rem">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-motorcycle"></i>
             
                </div>
                <h3 class="card-title">Jumlah Motor</h3>
                <div class="display-4"><?php echo $this->rental_model->get_data('motor')->num_rows(); ?></div>
                <a href="<?php echo base_url('admin/data_motor') ?>"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>
          
           
            <div class="card bg-success ml-5" style="width: 20rem">
              <div class="card-body">
                <div class="card-body-icon">
              <i class="fa fa-users"></i>
                </div>
                <h3 class="card-title">Jumlah Customer</h3>
                <div class="display-4"><?php echo $this->rental_model->get_data('customer')->num_rows(); ?></div>
                <a href="<?php echo base_url('admin/data_customer') ?>"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>

            <div class="card bg-warning ml-5" style="width: 20rem">
              <div class="card-body">
                <div class="card-body-icon">
              <i class="fa fa-grip-horizontal"></i>
                </div>
                <h3 class="card-title">Jumlah Type</h3>
                <div class="display-4"><?php echo $this->rental_model->get_data('type')->num_rows(); ?></div>
                <a href="<?php echo base_url('admin/data_type') ?>"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>

            
            <div class="card bg-danger ml-5" style="width: 20rem">
              <div class="card-body">
                <div class="card-body-icon">
              <i class="fa fa-random"></i>
                </div>
                <h3 class="card-title">Jumlah Tansaksi</h3>
                <div class="display-4"><?php echo $this->rental_model->get_data('transaksi')->num_rows(); ?></div>
                <a href="<?php echo base_url('admin/transaksi') ?>"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
              </div>
            </div>
          </div>
         </section>
       </div>