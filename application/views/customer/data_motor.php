<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Motor Kita</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
             <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">

                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            <!-- Single Car Start -->

                            <?php foreach ($motor as $m) : ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-car-wrap">
                                    <img style="width:100%" src="<?php echo base_url('assets/upload/motor/'.$m->gambar) ?>">
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?php echo $m->merk ?></a></h2>
                                        <h6>Rp. <?php echo number_format($m->harga,0,',','.') ?>/Hari</h6>
                                        
                                        <ul class="car-info-list">
                                            <li><?php 
                                                    if($m->helm == "1"){
                                                        echo "<i class='fa fa-check-square text-primary'></i>"; 
                                                    }else{
                                                         echo "<i class='fa fa-times-circle text-danger'></i>"; 

                                                }
                                                    ?> Helm </li>
                                            <li><?php 
                                                    if($m->bensin == "1"){
                                                        echo "<i class='fa fa-check-square text-primary'></i>"; 
                                                    }else{
                                                         echo "<i class='fa fa-times-circle text-danger'></i>"; 

                                                }
                                                    ?> Bensin Full </li>
                                            <li><?php 
                                                    if($m->jas_hujan == "1"){
                                                        echo "<i class='fa fa-check-square text-primary'></i>"; 
                                                    }else{
                                                         echo "<i class='fa fa-times-circle text-danger'></i>"; 

                                                }
                                                    ?> Jas Hujan</li>
                                        </ul>
                                       
                                        </p><center>
                                        <?php if ($m->status == "1") {
                                            echo anchor('customer/rental/tambah_rental/'.$m->id_motor,'<span class= "rent-btn">Rental</span>');
                                        }else{
                                            echo"<span class='rent-btn'>Tidak tersedia</span>";
                                        } ?>
                                       </center>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                            <!-- Single Car End -->


                           
                        </div>
                    </div>

                    <!-- Page Pagination Start -->
                    
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

   

                    