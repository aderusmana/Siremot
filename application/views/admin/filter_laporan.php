<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Laporan Transaksi</h1>
    </div>

  </section>

  <form method="POST" action="<?php echo base_url('admin/laporan')  ?>">
    <div class="form-group col-md-5">
      <label>Dari Tanggal</label>
      <input type="date" name="dari" class="form-control">
      <?php echo form_error('dari', '<div class="text-small text-danger">', '</div>') ?>

    </div>

    <div class="form-group col-md-5">
      <label>Sampai Tanggal</label>
      <input type="date" name="sampai" class="form-control">
      <?php echo form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>

    </div>
    <div class="col-sm-2">
      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye mr-2"></i>Tampilkan Data</button>
      </div>
    </div>



  </form>
</div>