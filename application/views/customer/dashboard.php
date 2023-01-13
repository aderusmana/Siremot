
    <!--== Header Area End ==-->

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center " style="margin-top: 130px">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell"  ><h1>Pesan Motor Sekarang!</h1>
                               
                                <br>
                                <br>
                                <br>

                                <body class="responsive">
                                        <img src="<?php echo base_url() ?>assets/customer/img/motor3.gif" class="car">
                                        <img src="<?php echo base_url() ?>assets/customer/img/motor.gif" class="motor">
                                        <img style="width:5000px;" src="<?php echo base_url() ?>assets/customer/img/road.png" class="road">

    </body>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>                                    
    </body>      
        <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Service Kita</h2>
                        <span class="title-line"><i class="fa fa-motorcycle"></i></span>
                        <p>Kami Menawarkan berbagai Service Bagi Pelanggan Kami.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Service Content Start -->
            <div class="row">
                <div class="col-lg-11 m-auto text-center">
                    <div class="service-container-wrap">
                        <!-- Single Service Start -->
                        <div class="service-item">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <h3>Fleksibel</h3>
                            <p>Bisa dipesan Kapanpun dan Dimanapun,Langsung pesan Melalui Website Kami.</p>
                        </div>
                        <!-- Single Service End -->

                        <!-- Single Service Start -->
                        <div class="service-item">
                            <i class="fa fa-plus-square"></i>
                            <h3>Asuransi kecelakaan</h3>
                            <p>Kami siap membantu bahkan memberikan Jaminan Keselamatan.</p>
                        </div>
                        <!-- Single Service End -->

                        

                        <!-- Single Service Start -->
                        <div class="service-item">
                            <i class="fa fa-money"></i>
                            <h3>Murah dan Terjamin</h3>
                            <p>Tarif yang kami kenakan adalah tarif yang bersaing dan konsisten..</p>
                        </div>
                        <!-- Single Service End -->

                           <!-- Single Service Start -->
                        <div class="service-item">
                            <i class="fa fa-support"></i>
                            <h3>Kualitas Terjamin</h3>
                            <p>Setiap Motor yang anda sewa selalu dalam kondisi prima dan sudah diuji oleh tim Kami.</p>
                        </div>
                        <!-- Single Service End -->
                    </div>
                </div>
            </div>
            <!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $this->rental_model->get_data('customer')->num_rows(); ?></span>+</p>
                                        <h4>Happy Customer</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-motorcycle"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $this->rental_model->get_data('motor')->num_rows(); ?></span>+</p>
                                        <h4>Stok Motor</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter"><?php echo $this->rental_model->get_data('transaksi')->num_rows(); ?></span>+</p>
                                        <h4>Jumlah Transaksi</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->


    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Testimoni</h2>
                        <span class="title-line"><i class="fa fa-thumbs-o-up"></i></span>
                        <p>Kami di Mata Customer.</p>
                    </div>
                </div>
                <!-- Section Title End -->
             </div>

           <!-- Service Content Start -->
           
               
            <div class="row">

                <div class="col-lg-11 m-auto text-center">

                    <div class="service-container-wrap">
                        <!-- Single Service Start -->
                        <?php  foreach($transaksi as $tr): ?>
                        <div class="service-item">
                            <center><img style="width:50%" src="<?php echo base_url() ?>assets/img/dummy.png"></center>
                            <h5><?php echo $tr->nama ?>, <?php echo $tr->alamat ?></h5>
                           <p><?php echo $tr->testimoni ?></p>
                        </div>

                        <?php endforeach; ?>
                        <!-- Single Service End -->
                    </div>
                </div>
            </div>
            <!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->


   