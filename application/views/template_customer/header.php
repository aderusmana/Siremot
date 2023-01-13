<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>SiRemot - Soenter Rental Motor</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url() ?>assets/customer/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/customer/css/customer.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?php echo base_url() ?>assets/customer/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

     <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Jakarta ,Indonesia
                    </div>
                    <!--== Single HeaderTop End ==-->

                     <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +62 0819 0543 1118
                    </div>
                    <!--== Single HeaderTop End ==-->

                    

                    <!--== Single HeaderTop Start ==-->
                  
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i>   
                        <?php 
                        
                        date_default_timezone_set("Asia/Jakarta");
                        $jam = date ("H:i:s");
                        echo " |  " . $jam . " " ." </b> ";
                        $a = date ("H");
                        
                     ?>
                    </div>
                    <!--== Single HeaderTop End ==-->

                  <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->

                    <div class="col-lg-4 " >
                        <a href="<?php echo base_url() ?>" class="responsive">
                            <img src="<?php echo base_url() ?>assets/customer/img/logo2.png" alt="JSOFT" >
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class=""><a href="<?php echo base_url() ?>">Home</a></li>

                                <li><a href="<?php echo base_url('customer/data_motor') ?>">Motor</a> </li>
                               
                                <li><a href="<?php echo base_url('customer/rules') ?>">Rules</a></li>
                                <li><a href="<?php echo base_url('customer/contact') ?>">Contact</a></li>
                               <?php  if($this->session->userdata('nama')) { ?>
                                 <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a> </li>
                                <li> <a href="#">Hi, <?php echo $this->session->userdata('nama') ?></a>
                                    <ul>
                                       <li><a href="<?php echo base_url('auth/logout') ?>"><span>Logout</span></a></li>
                                       <li><a href="<?php echo base_url('auth/ganti_password') ?>"><span>Change Password</span></a></li>
                                       <ul>
                                <?php } else { ?>                                                               
                                        <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                                        <li><a href="<?php echo base_url('register') ?>">Register</a> </li>  
                                <?php } ?>
                                </ul>
                            </ul>



                                
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>


          
