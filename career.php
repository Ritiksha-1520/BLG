<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- SEO Keywords -->
<meta name="description" content="BLG Construction: Your Gateway to Success

Discover exciting career prospects with BLG Construction Company. As we expand, we're seeking passionate individuals to join our innovative team. Explore our diverse opportunities and take the first step towards a fulfilling career. Apply now and embark on a journey of growth and achievement with BLG.">

<meta name="keywords" content="BLG Construction Services Pvt. Ltd., BLG Construction Services Pvt. Ltd., BLG contruction, BLG company, BLG contruction Company,BLG constructeur maison, BLG builders, BLG Remodeling, building design and construction, BLG contruction, BLG Jodhpur, BLG Ahmedabad, BLG Bhopal, BLG Dehradun,BLG Lucknow,
      BLG Mumbai, BLG Noida, BLG Nashik, BLG Patna, Concrete work, Structural engineering, custom home builders, India top contruction company , Railway, urban development, road infrastructure, airports, real estate development, Water Supply & Sanitation, Bridges, Roads & Highways, Ports, Industrial Development">

   <title>BLG - career</title>
   <!-- Fav Icon -->
   <link rel="icon" href="assets/images/blg-logo-ch.png" type="image/x-icon">
   <!-- Fav Icon -->

   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all' />
   <!--<link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all' />-->
   <link rel='stylesheet' href='assets/css/icomoon.css' type='text/css' media='all' />
   <!--<link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all' />-->
   
   
   <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
   
   <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
   <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
   <!--<link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css'-->
   <!--   type='text/css' media='all' />-->
   <!-- Style-->
   

      
      
</head>

<body class="theme-creote">
   <div id="page" class="page_wapper hfeed site">
     
      <!---============== wrapper_full =================-->
      <div id="wrapper_full" class="content_all_warpper">
         <!----mini cart----->
        
         <!----mini cart----->
         <!----preloader----->
                                    <!-- <div class="preloader-wrap">
                                       <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
                                       </div>
                                       <div class="overlay"></div>
                                    </div> -->
         <!----preloader----->
         <!----header----->
         <?php include('connection.php'); 
         include('header.php');
         ?>
         <!----header end----->
         <div class="page_header_default style_one">
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
                              Careers
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <!--<li><a href="assetsindex.html">Home</a></li>-->
                              <!--<li class="active">Career</li>-->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!----header----->
         <!----page-CONTENT----->
         <!-- <div id="content" class="site-content ">
               <div class="container">
                  <div class="row default_row">
                     <div class="full_width_box">
                        <section class="creote-progress">
         ===============spacing==============-->
         <div class="pd_top_80"></div>
         <!--===============spacing==============
          <div class="row">
            <table class="table"> 
            <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                        <div class="before_title">BLG</div> -->
                           <!-- <h2>Career Option </h2>
                           
                        </div>
                     </div> -->
                     
                  
                     
                     
                       <div class="auto-container">
                                    <div class="d-flex align-items-center">
                                       <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                                          <!--<div class="slider_content">-->
                                          <!--   <h1>Skilled Industry Professionals</h1>-->
                                          <!--   <h6>Careers</h6>-->
                                             <p class="description">We at BLG  believe that our success is driven by the talent, dedication, and passion of our team members. As we continue to grow and expand our operations, we are constantly seeking motivated individuals who share our commitment to excellence and innovation. Here, you will find exciting career opportunities across various disciplines, sectors and departments. Whether you're an experienced professional looking to take the next step in your career or a recent graduate eager to make an impact, BLG offers a supportive and dynamic work environment where you can thrive and grow. Explore our current vacancies below and take the first step towards a rewarding career with BLG Construction Services.
                                             </p>
                                           
                                          </div>
                                       </div>
                                     
                                    </div>
                                 </div>
                                 
                                 
         <div class="container mx-auto m-2">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <table class="table ">
                        <tr>
                           <th>S.NO </th>
                           <th>Job Code</th>
                           <th>Job Title</th>
                           <th>Experience Required</th>
                           <th>Qualification</th>
                           <th>Division</th>
                           <th>No.Of Vacancies </th>
                           <th>Location</th>
                           <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                     <?php
                     $sql2 = "SELECT * From `entry_table` where 1";
                     $query_result = mysqli_query($conn, $sql2) or die("Error");
                     
                     $rows = mysqli_num_rows($query_result); 
                     
                     if($rows>0){
                     $x=0;
                     while ($row = mysqli_fetch_array($query_result)) {
                        ?>
                        <tr>
                           <td><?php echo $x=$x+1;?></td>
                           <td>
                              <?php echo $row['job_code']; ?>
                           </td>
                           <td>
                              <?php echo $row['job_title']; ?>
                           </td>
                           <td>
                              <?php echo $row['experience_required']; ?>
                           </td>
                           <td>
                              <?php echo $row['qualification']; ?>
                           </td>
                           <td>
                              <?php echo $row['division']; ?>
                           </td>
                           <td>
                              <?php echo $row['no_of_vacancies']; ?>
                           </td>
                           <td>
                              <?php echo $row['location']; ?>
                           </td>
                           <td> <a href="registration_form.php?id=<?php echo base64_encode($row['id']);?>" target="_blank" rel="nofollow" class="theme-btn two">Apply</a>
                           </td>
                        </tr>
                        <?php
                     } }else{ ?> <tr> <td colspan="9" align="center"><?php echo "There is no opening.";} ?> </td></tr>
                    
                  </tbody>
               </table>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
         </div>
      </div>
      <!--===============spacing==============-->
      <!-- <div class="pd_bottom_50"></div> -->
      <!--===============spacing==============-->
      </section>
   </div>
   </div>
   </div>
   </div>
   </div>
   <!---==============footer start =================-->
   <?php include('footer.php'); ?>
   <!---==============footer end =================-->
  

   


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
   <!--<script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>-->
   <!--<script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>-->
   <!--<script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>-->
   <!--<script type='text/javascript' src='assets/js/color-scheme.js'></script>-->
   <script type='text/javascript' src='assets/js/owl.js'></script>
   <script type='text/javascript' src='assets/js/swiper.min.js'></script>
   <script type='text/javascript' src='assets/js/isotope.min.js'></script>
   <!--<script type='text/javascript' src='assets/js/countdown.js'></script>-->
   <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
   <script type='text/javascript' src='assets/js/appear.js'></script>
   <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
   <script type='text/javascript' src='assets/js/sharer.js'></script>
   <script type='text/javascript' src='assets/js/validation.js'></script>
   <!-- map script -->
   <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>-->
   <!--<script src="assets/js/gmaps.js"></script>-->
   <!--<script src="assets/js/map-helper.js"></script>-->
   <!-- main-js -->
   <script type='text/javascript' src='assets/js/creote-extension.js'></script>
   <!---========================== javascript ==========================-->
</body>

</html>