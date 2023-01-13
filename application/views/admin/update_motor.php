<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Data Motor</h1>
          </div>
          <div class="card">
            <div class="card-body">
              <?php foreach ($motor as $m) : ?>

                    <form method="POST" action="<?php echo base_url('admin/data_motor/update_motor_aksi') ?>" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label>Type Motor</label>
                    <input type="hidden" name="id_motor" value="<?php echo $m->id_motor ?>">
                    <select  class="form-control form-control-sm" name="kode_type">
                      <option value="<?php echo $m->kode_type ?>"> <?php echo $m->kode_type ?></option>
                      <?php foreach($type as $tp) : ?>
                        <option value="<?php echo $tp->kode_type ?>"> <?php echo $tp->nama_type ?></option>
                        <?php endforeach; ?>
                    </select>

                  <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?> 

                  </div>
                  <div class="form-group">
                    <label>Merk</label>
                    <input type="text"  class="form-control form-control-sm" name="merk" value="<?php echo $m->merk ?>">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <label>No Plat</label>
                    <input type="text"  class="form-control form-control-sm" name="no_plat" value="<?php echo $m->no_plat?>">
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  
                              <div class="form-group">
                                   <label>Warna</label>
                                   <input type="text"  class="form-control form-control-sm"name="warna" value="<?php echo $m->warna ?>">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               <div class="form-group">
                                   <label>Helm</label>
                                   <select  class="form-control form-control-sm" name="helm">
                                        <option <?php if($m->helm =="1"){echo "selected='selected'";}
                                        echo $m->helm;  ?> value="1">Tersedia</option>
                                        <option <?php if($m->helm =="0"){echo "selected='selected'";}
                                        echo $m->helm;  ?> value="0">Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('helm','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               <div class="form-group">
                                   <label>Bensin</label>
                                   <select  class="form-control form-control-sm" name="bensin">
                                        <option <?php if($m->bensin =="1"){echo "selected='selected'";}
                                        echo $m->bensin;  ?> value="1">Tersedia</option>
                                        <option <?php if($m->bensin =="0"){echo "selected='selected'";}
                                        echo $m->bensin;  ?> value="0">Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('bensin','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               <div class="form-group">
                                   <label>Jas Hujan</label>
                                   <select  class="form-control form-control-sm" name="jas_hujan">
                                        <option <?php if($m->jas_hujan =="1"){echo "selected='selected'";}
                                        echo $m->jas_hujan;  ?> value="1">Tersedia</option>
                                        <option <?php if($m->jas_hujan =="0"){echo "selected='selected'";}
                                        echo $m->jas_hujan;  ?> value="0">Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('jas_hujan','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                   <label>Harga</label>
                                   <input type="text"  class="form-control form-control-sm" name="harga" value="<?php echo $m->harga ?>">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                              </div>

                               
                               
                                  <div class="form-group">
                                   <label>Denda</label>
                                   <input type="text"  class="form-control form-control-sm" name="denda" value="<?php echo $m->denda ?>">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                              </div>
    
                                
                                
                                  <div class="form-group">
                                   <label>Tahun</label>
                                   <input type="text"  class="form-control form-control-sm" name="tahun" value="<?php echo $m->tahun ?>">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Status</label>
                                   <select  class="form-control form-control-sm" name="status">
                                        <option <?php if($m->status =="1"){echo "selected='selected'";}
                                        echo $m->status;  ?> value="1">Tersedia</option>
                                        <option <?php if($m->status =="0"){echo "selected='selected'";}
                                        echo $m->status;  ?> value="0">Tidak Tersedia</option>
                                   </select>
                                    <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                              </div>

                              <div class="form-group">
                                   <label>Gambar</label>
                                   <input type="file"  class="form-control form-control-sm" name="gambar">

                              </div>
                                   
                                   <button type="submit" class="btn btn-primary">SIMPAN</button>
                                   <button type="reset" class="btn btn-danger">Reset</button>
                         </div>
              </div>
                    </form>
                  <?php endforeach; ?>
            </div>
          </div>
            
      </section>
  </div>