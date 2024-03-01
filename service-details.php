<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- SEO Keywords -->
    <meta name="description" content="BLG stands at the forefront of addressing pressing global issues, from ensuring water access, urban development, irrigation, building design, road infrastructure, railways, airports, ports, and industrial and real estate development. With extensive expertise and a focus on innovation, we deliver comprehensive solutions that drive progress and sustainability across diverse sectors.">

    <meta name="keywords" content="BLG Construction Services Pvt. Ltd., BLG contruction, BLG company, BLG contruction Company,BLG constructeur maison, BLG builders, BLG Remodeling, building design and construction, building and construction,BLG contruction, BLG Jodhpur, BLG Ahmedabad , BLG Bhopal, BLG Dehradun,BLG Lucknow,
    BLG Mumbai, BLG Noida, BLG Nashik, BLG Patna, building design and construction, Railway, urban development,
    road infrastructure, airports, real estate development, Water Supply & Sanitation, Bridges, Roads & Highways, Ports, Industrial Development">
    <title>BLG Sector Overview</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/blg-logo-ch.png" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <!-- Google Fonts -->
    <!-- Style -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/icomoon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css'
        type='text/css' media='all' />
    <!-- Style-->
    <!----woocommerce---->
    <link rel='stylesheet' href='assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/woocommerce.css' type='text/css' media='all' />
    <!----woocommerce---->
</head>

<body class="theme-creote left-sidebar">
    <?php include('connection.php'); ?>
    <!----header----->
    <?php 
include('header.php');
?>
    <div class="page_header_default style_one ">
        <div class="parallax_cover">
            <div class="simpleParallax"><img src="assets/images/page-header-default.jpg" alt="bg_image"
                    class="cover-parallax"></div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                            <div class="active" style="text-transform: capitalize;">
                                    <?php
                                            if(isset($_GET['sector_id']))
                                            {
                                            $sector_id= base64_decode($_GET['sector_id']);
                                                $sql1 = mysqli_query($conn,"Select * from sectors where id=' $sector_id' ");
                                                $val=mysqli_fetch_array($sql1);

                                                echo $val['sector_name'];
                                            }         
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li><a href="service-classic.php" style="text-transform: capitalize;">Sector</a></li>

                                <li class="active" style="text-transform: capitalize;">
                                    <?php
                                            if(isset($_GET['sector_id']))
                                            {
                                            $sector_id= base64_decode($_GET['sector_id']);
                                                $sql1 = mysqli_query($conn,"Select * from sectors where id=' $sector_id' ");
                                                $val=mysqli_fetch_array($sql1);

                                                echo $val['sector_name'];
                                            }         
                                            ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----header----->
    <!----page-CONTENT----->
    <div id="content" class="site-content ">
        <div class="auto-container">

            <div class="row default_row">
                <div id="primary" class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <?php

                           if(isset($_GET['sector_id']))
                           {
                           $sector_id= base64_decode($_GET['sector_id']);
                            $sql1 = mysqli_query($conn,"Select * from sectors where id=' $sector_id' ");
                            $val=mysqli_fetch_array($sql1);

                            echo $val['description'];
                           }
                           
                           
                           ?>
                    </main>
                </div>
                <aside id="secondary" class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12 d-none d-xl-block d-md-block d-lg-block">
                    <div class="service_siderbar side_bar">
                        <!--===============spacing==============-->
                        <div class="pd_top_85"></div>
                        <!--===============spacing==============-->

                        <div class="widgets_grid_box">
                            <div class="widget creote_widget_service_list">
                                <h4 class="widget-title">Sectors</h4>
                                <div class="icon-home mb-5" style="color:#078586; font-weight: bold; font-size: 20px;"><a href="service-classic.php"> Sector overview</a></div>

                                <ul class="service_list_box">
                                    <?php $sql = mysqli_query($conn,"Select * from sectors");
                                                while($val=mysqli_fetch_array($sql))
                                                {
                                            ?>
                                    <li><a <?php if($sector_id == $val['id']) echo 'style="color:#078586; text-shadow: 2px 2px 4px rgba(0, 0, 0, .2); font-weight: bold; font-size: 18px;" '; ?>
                                            href="service-details.php?sector_id=<?php echo base64_encode($val['id'])?>"><?php echo $val['sector_name']; ?></a>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>


                        <!--===============spacing==============-->
                        <div class="pd_bottom_65"></div>
                        <!--===============spacing==============-->
                    </div>
                </aside>
            </div>
        </div>

    </div>
    </div>
    <!---==============footer start =================-->
    <?php include('footer.php');?>
    <!---==============cart=================-->

    </div>
    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!---========================== javascript ==========================-->
    <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='assets/js/color-scheme.js'></script>
    <script type='text/javascript' src='assets/js/owl.js'></script>
    <script type='text/javascript' src='assets/js/swiper.min.js'></script>
    <script type='text/javascript' src='assets/js/isotope.min.js'></script>
    <script type='text/javascript' src='assets/js/countdown.js'></script>
    <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
    <script type='text/javascript' src='assets/js/appear.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
    <script type='text/javascript' src='assets/js/sharer.js'></script>
    <script type='text/javascript' src='assets/js/validation.js'></script>
    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>
    <!-- main-js -->
    <script type='text/javascript' src='assets/js/creote-extension.js'></script>
    <!---========================== javascript ==========================-->
</body>

<!-- Mirrored from themepanthers.com/html/creote-html/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 06:00:14 GMT -->

</html>