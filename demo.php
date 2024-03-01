<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themepanthers.com/html/creote-html/elements/content-box.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 06:01:10 GMT -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>Creote - Just another Html template</title>
   <!-- Fav Icon -->
   <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
   <!-- Fav Icon -->
   <!-- Google Fonts -->
   <link rel='stylesheet'
      href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext'
      type='text/css' media='all' />
   <!-- Google Fonts -->
   <!-- Style -->
   <link rel='stylesheet' href='../assets/css/bootstrap.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/owl.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/swiper.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/icomoon.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/flexslider.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/font-awesome.min.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/style.css' type='text/css' media='all' />
   <link rel='stylesheet' href='../assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
   <link rel='stylesheet' id="creote-color-switcher-css" href='../assets/css/scss/elements/color-switcher/color.css'
      type='text/css' media='all' />
   <!-- Style-->
</head>

<body class="theme-creote">
   <div id="page" class="page_wapper hfeed site">
      <div class="style-switcher">
         <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
         <h3>Color Skins</h3>
         <ul id="colorschemeOptions" title="Switch Color" data-css-path="../assets/css/scss/elements/color-switcher/">
            <li>
               <a href="#" data-theme="color" style="background-color: #078586;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color1" style="background-color: #e5102a;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color2" style="background-color: #3ead3c;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color3" style="background-color: #fed000;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color4" style="background-color: #ff5538;"> </a>
            </li>
            <li>
               <a href="#" data-theme="color5" style="background-color: #246af4;"> </a>
            </li>
         </ul>
      </div>
      <!---============== wrapper_full =================-->
      <div id="wrapper_full" class="content_all_warpper">
         <!----mini cart----->
         <div class="mini_cart_togglers fixed_cart">
            <div class="mini-cart-count">
               0
            </div>
            <i class="icon-shopping-cart"></i>
         </div>
         <!----mini cart----->
         <!----preloader----->
         <div class="preloader-wrap">
            <div class="preloader" style="background-image:url(../assets/images/preloader.gif)">
            </div>
            <div class="overlay"></div>
         </div>
         <!----preloader----->
         <!----header----->
         <div class="header_area" id="header_contents">
            <div class="top_bar style_one">
               <div class="auto-container">
                  <div class="row align-items-center">
                     <div class="col-lg-12">
                        <div class="top_inner">
                           <div class="left_side common_css">
                              <div class="contntent address">
                                 <i class="icon-placeholder"></i>
                                 <div class="text">
                                    <small>Location</small>
                                    <span>61W Business Str Hobert, LA </span>
                                 </div>
                              </div>
                              <div class="contntent email">
                                 <i class="icon-email"></i>
                                 <div class="text">
                                    <small>Email</small>
                                    <a href="mailto:sendmail@creote.com">sendmail@creote.com</a>
                                 </div>
                              </div>
                           </div>
                           <div class="right_side common_css">
                              <div class="contntent phone">
                                 <i class="icon-phone-call"></i>
                                 <div class="text">
                                    <small>Phone</small>
                                    <a href="tel:+9806071234">+9806071234</a>
                                 </div>
                              </div>
                              <div class="contntent media">
                                 <i class="icon-share"></i>
                                 <div class="text">
                                    <small>Share</small>
                                    <a href="#" target=_blank rel=nofollow>
                                       <small>Fb</small>
                                    </a>
                                    <a href="#" target=_blank rel=nofollow>
                                       <small>Tw</small>
                                    </a>
                                    <a href="#" target=_blank rel=nofollow>
                                       <small>Sk</small>
                                    </a>
                                    <a href="#" target=_blank rel=nofollow>
                                       <small>Te</small>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <header class="header header_default style_one get_sticky_header">
               <div class="auto-container">
                  <div class="row align-items-center">
                     <div class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column">
                        <div class="header_logo_box">
                           <a href="../index.html" class="logo navbar-brand">
                              <img src="../assets/images/logo-default.png" alt="Creote Elementor" class="logo_default">
                              <img src="../assets/images/logo-default.png" alt="Creote Elementor" class="logo__sticky">
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-10 col-md-3 col-sm-3 col-xs-3 menu_column">
                        <div class="navbar_togglers hamburger_menu">
                           <span class="line"></span>
                           <span class="line"></span>
                           <span class="line"></span>
                        </div>
                        <div class="header_content_collapse">
                           <div class="header_menu_box">
                              <div class="navigation_menu">
                                 <ul id="myNavbar" class="navbar_nav">
                                    <li
                                       class="menu-item  menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item">
                                       <a href="../index.html" class="dropdown-toggle nav-link">
                                          <span>Home</span>
                                       </a>
                                       <ul class="dropdown-menu width_60_percentage">
                                          <li>
                                             <div class="row">
                                                <div class="col-lg-3 m_column">
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../index.html">Home Page -
                                                                  01</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-2.html">Home Page -
                                                                  02</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-3.html">Home Page -
                                                                  03</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-4.html">Home Page -
                                                                  04</a>
                                                            </small>
                                                         </li>

                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 m_column">
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-5.html">Home Page -
                                                                  05</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-6.html">Home Page -
                                                                  06</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-7.html">Home Page -
                                                                  07</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-8.html">Home Page -
                                                                  08</a>
                                                            </small>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 m_column">
                                                   <div class="list_item_box style_one">
                                                      <ul>

                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-9.html">Home Page -
                                                                  09</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-10.html">Home Page -
                                                                  10</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-11.html">Home Page -
                                                                  11</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-12.html">Home Page -
                                                                  12</a>
                                                            </small>
                                                         </li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-3 m_column">
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-13.html">Home Page -
                                                                  13</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-14.html">Home Page -
                                                                  14</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-15.html">Home Page -
                                                                  15</a>
                                                            </small>
                                                         </li>
                                                         <li>
                                                            <small class="d-flex align-items-center">
                                                               <i class="icon-home only_icon"></i>
                                                               <a class="nav_link" href="../home-16.html">Home Page -
                                                                  16</a>
                                                            </small>
                                                         </li>

                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="#" class="dropdown-toggle nav-link">
                                          <span>Pages</span>
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li class="menu-item  nav-item">
                                             <a href="../about-us.html" class="dropdown-item nav-link">
                                                <span>About Us</span>
                                             </a>
                                          </li>
                                          <li class="menu-item menu-item-has-children dropdown nav-item">
                                             <a href="../service-default.html"
                                                class="dropdown-item nav-link"><span>Service</span></a>
                                             <ul class="dropdown-menu">
                                                <li class="menu-item  nav-item">
                                                   <a href="../service-classic.html" class="dropdown-item nav-link">
                                                      <span>Service Classic</span>
                                                   </a>
                                                </li>
                                                <li class="menu-item  nav-item">
                                                   <a href="../service-default.html" class="dropdown-item nav-link">
                                                      <span>Service Default</span>
                                                   </a>
                                                </li>
                                                <li class="menu-item nav-item">
                                                   <a href="../service-details.html" class="dropdown-item nav-link">
                                                      <span>Service Details</span>
                                                   </a>
                                                </li>
                                             </ul>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../pricing-packages.html" class="dropdown-item nav-link">
                                                <span>Pricing Packages</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../our-team.html" class="dropdown-item nav-link">
                                                <span>Our Team</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../faqs.html" class="dropdown-item nav-link">
                                                <span>Faq’s</span>
                                             </a>
                                          </li>
                                          <li class="../menu-item  nav-item">
                                             <a href="../contact.html" class="dropdown-item nav-link">
                                                <span>Contact</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../coming-soon.html" class="dropdown-item nav-link">
                                                <span>Coming Soon</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li
                                       class="menu-item menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item">
                                       <a href="#" class="dropdown-toggle nav-link"><span>Elements</span></a>
                                       <ul class="dropdown-menu width_60_percentage">
                                          <li>
                                             <div class="row">
                                                <div class="col-lg-2 m_column">
                                                   <h5>Content 01</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="testimonial.html">Testimonial</a></li>
                                                         <li><a href="call-to-action.html">Contact List</a></li>
                                                         <li><a href="video-button.html">Video Button</a></li>
                                                         <li><a href="newsteller.html">Newsteller</a></li>
                                                         <li><a href="blog-posts.html">Blog Posts</a></li>
                                                         <li><a href="team.html">Team</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-2 m_column">
                                                   <h5>Content 02</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="process.html">Process</a></li>
                                                         <li><a href="project-carousel.html">Project Carousel</a></li>
                                                         <li><a href="project-filter.html">Project Filter</a></li>
                                                         <li><a href="progress-bar.html">Progress Bar</a></li>
                                                         <li><a href="content-box.html">Content Box</a></li>
                                                         <li><a href="faqs-elements.html">Faq’s</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-2 m_column">
                                                   <h5>Presentational</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="button.html">Button</a></li>
                                                         <li><a href="list-items.html">List Items</a></li>
                                                         <li><a href="contact-form.html">Contact Form</a></li>
                                                         <li><a href="service-post.html">Service Post</a></li>
                                                         <li><a href="sliders.html">Sliders</a></li>
                                                         <li><a href="tabs.html">Tabs</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-2 m_column">
                                                   <h5>Typography</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="call-to-action.html">Call to Action</a></li>
                                                         <li><a href="extra-content.html">Extra Content</a></li>
                                                         <li><a href="simple-image.html">Simple Image</a></li>
                                                         <li><a href="client-image.html">Client Image</a></li>
                                                         <li><a href="price-plan.html">Price Plan</a></li>
                                                         <li><a href="title.html">Title</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-2 m_column">
                                                   <h5>Basic</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="service-box.html">Service Box</a></li>
                                                         <li><a href="count-down.html">Count Down</a></li>
                                                         <li><a href="timeline.html">Time Line</a></li>
                                                         <li><a href="contact-box.html">Contact Box</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="col-lg-2 m_column">
                                                   <h5>Infographic</h5>
                                                   <div class="list_item_box style_one">
                                                      <ul>
                                                         <li><a href="image-box.html">Image Box</a></li>
                                                         <li><a href="icon-box.html">Icon Box</a></li>
                                                         <li><a href="fun-facts.html">Fun Facts</a></li>
                                                         <li><a href="quotes.html">Quotes</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="../blog.html" class="dropdown-toggle nav-link">
                                          <span>Blog</span>
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li class="menu-item nav-item">
                                             <a href="../blog.html" class="dropdown-item nav-link">
                                                <span>Blog Classic</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../blog-modern.html" class="dropdown-item nav-link">
                                                <span>Blog Modern</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../blog-simple.html" class="dropdown-item nav-link">
                                                <span>Blog Simple</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../blog-list-view.html" class="dropdown-item nav-link">
                                                <span>Blog List View</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../blog-metro-fullwidth.html" class="dropdown-item nav-link">
                                                <span>Metro Fullwidth</span>
                                             </a>
                                          </li>
                                          <li class="menu-item nav-item">
                                             <a href="../blog-single.html" class="dropdown-item nav-link">
                                                <span>Single Post</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown nav-item">
                                       <a href="../project-1-column-grid.html" class="dropdown-toggle nav-link">
                                          <span>Projects</span>
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li class="menu-item  nav-item">
                                             <a href="../project-1-column-grid.html" class="dropdown-item nav-link">
                                                <span>1 Column Grid</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../project-1-column-with-sidebar.html"
                                                class="dropdown-item nav-link">
                                                <span>1 Column With Sidebar</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../project-2-column-grid.html" class="dropdown-item nav-link">
                                                <span>2 Columns Grid</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../project-3-column-grid.html" class="dropdown-item nav-link">
                                                <span>3 Columns Grid</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../project-3-column-overlay.html" class="dropdown-item nav-link">
                                                <span>3 Columns Overlay</span>
                                             </a>
                                          </li>
                                          <li class="menu-item nav-item">
                                             <a href="../project-details.html" class="dropdown-item nav-link">
                                                <span>Project Details</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item  menu-item-has-children dropdown nav-item">
                                       <a href="../shop.html" class="dropdown-toggle nav-link">
                                          <span>Shop</span>
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li class="menu-item  nav-item">
                                             <a href="../shop.html" class="dropdown-item nav-link">
                                                <span>Products</span>
                                             </a>
                                          </li>
                                          <li class="menu-item nav-item">
                                             <a href="../shop-details.html" class="dropdown-item nav-link">
                                                <span>Product Details</span>
                                             </a>
                                          </li>
                                          <li class="menu-item nav-item">
                                             <a href="../shop-with-sidebar.html" class="dropdown-item nav-link">
                                                <span>Product With Sidebar</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../my-account.html" class="dropdown-item nav-link">
                                                <span>My account</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../checkout.html" class="dropdown-item nav-link">
                                                <span>Checkout</span>
                                             </a>
                                          </li>
                                          <li class="menu-item  nav-item">
                                             <a href="../cart.html" class="dropdown-item nav-link">
                                                <span>Cart</span>
                                             </a>
                                          </li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="header_right_content">
                              <ul>
                                 <li>
                                    <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                                 </li>
                                 <li class="header-button">
                                    <a href="../contact.html" target="_blank" rel="" class="theme-btn one"> Get In Touch
                                    </a>
                                 </li>
                                 <li>
                                    <button type="button" class="contact-toggler"><i class="icon-bar"></i></button>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <!----header end----->
         <div class="page_header_default style_one">
            <div class="parallax_cover">
               <div class="simpleParallax"><img src="../assets/images/page-header-default.jpg" alt="bg_image"
                     class="cover-parallax"></div>
            </div>
            <div class="page_header_content">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_title_inner">
                           <div class="title_page">
                              Career
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                           <ul class="breadcrumb m-auto">
                              <li><a href="../index.html">Home</a></li>
                              <li class="active">Career</li>
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
                           <--===============spacing==============-->
         <!-- <div class="pd_top_80"></div> table-gape -->
         <!--===============spacing==============-->
         <!-- <div class="row">
            <table class="table"> -->
            <!-- <div class="title_all_box style_one text-center dark_color"> -->
                        <!-- <div class="title_sections">
                           <!-- <div class="before_title">BLG</div> -->
                           <!-- <h2>Career Option </h2>         
                        </div>
                     </div> --> -->
                     <!-- <div id="content" class="site-content "> -->
                <div class="container">
                    <div class="row default_row">
                        <div class="full_width_box">
                            <!--===============spacing==============-->
                            <div class="pd_top_80"></div>
                            <!--===============spacing==============-->
                            <div class="title_all_box style_one text-center dark_color">
                                <div class="title_sections">
                                    <!-- <div class="before_title">BLG</div> -->
                                    <h2>Registration Form</h2>

                                </div>
                            </div>

                            <section class="contact_form_box_all type_one">
                                <div class="contact_form_box_inner">
                                    <div class="contact_form_shortcode">
                                        <div role="form" class="wpcf7">

                                            <form action="registration_data.php" method="POST" class="wpcf7-form init" enctype="multipart/form-data">
                                            <div class="row">
                                            <div class="col-6">
                                                <p><label>First Name<br>
                                                        <span class="wpcf7-form-control-wrap first-name"><input
                                                                type="text" name="first_name" value="" size="40" id ="first_name"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your First Name"></span><br>
                                                        <i class="fa fa-user"></i><br>
                                                    </label>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p><label>Last Name<br>
                                                        <span class="wpcf7-form-control-wrap your-name"><input
                                                                type="text" name="last_name" value="" size="40" id="last_name"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Last Name"></span><br>
                                                        <i class="fa fa-user"></i><br>
                                                    </label>
                                                </p>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class = "col-12">
                                                <p><label>E-mail<br>
                                                        <span class="wpcf7-form-control-wrap your-email"><input
                                                                type="email" name="email" value="" size="40" id="email"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Email"></span><br>
                                                        <i class="fa fa-envelope"></i><br>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                            <div class="row">
                                                <div class = "col-12">
                                                <p><label>Mobile Number<br>
                                                        <span class="wpcf7-form-control-wrap your-subject"><input
                                                                type="number" name="mobile_no" value="" size="40" id="mobile_no"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your mobile no"></span><br>
                                                        <i class="fa fa-phone"></i></i><br>
                                                    </label>
                                                </p></div></div>
                                                <div class="row">
                                                <div class = "col-12">
                                                <p><label>Linkedin url<br>
                                                        <span class="wpcf7-form-control-wrap your-subject"><input
                                                                type="text" name="linkedin_url" value="" size="40" id = "linkedin_url"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Linkedin url"></span><br>
                                                                <i class="fa fa-linkedin"></i><br>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                                <div class="row">
                                                <div class = "col-12">
                                                <p><label>Current Location <br>
                                                        <span class="wpcf7-form-control-wrap your-subject"><input
                                                                type="text" name="current_location" value="" size="40" id="current_location"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Current Location"></span><br>
                                                                <i class="fa fa-location-arrow" ></i><br>
                                                    </label>
                                                </p>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class = "col-12">
                                                <p><label>Total Experience <small>(in years)</small><br>
                                                        <span class="wpcf7-form-control-wrap your-subject"><input
                                                                type="number" name="total_experience" value="" size="40" id="experience"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Experience"></span><br>
                                                        <i class="fa fa-folder"></i><br>
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                                <div class="row">
                                                <div class = "col-12">
                                                <p><label>Resume<small> (attachment)</small><br>
                                                        <span class="wpcf7-form-control-wrap your-subject"><input
                                                                type="file" name="myfile" value="" size="40" id="myfile"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Choose a file"></span><br>
                                                                <i class="fa fa-file"></i>
                                                        <br>
                                                    </label>
                                                </p>
                                                <div>
                                            </div>

                                                <p><input type="submit" value="Submit"
                                                        class="wpcf7-form-control has-spinner wpcf7-submit"></p>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>
</div>
</div>
</div>
</div>
</div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        
                    <!--===============spacing==============-->
                    <div class="pd_bottom_50"></div>
                    <!--===============spacing==============-->
                   
                </div>
            </div>
        </div>
      </section>
   </div>
   </div>
   </div>
   </div>
   </div>
   <!---==============footer start =================-->
   <div class="footer_area" id="footer_contents">
      <div class="footer_widgets_wrap bg_dark_2">
         <!--===============spacing==============-->
         <div class="pd_top_80"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer_widgets about_company light_color">
                     <div class="about_company_inner">
                        <div class="footer_logo">
                           <a href="#" target="_blank" rel="nofollow">
                              <img src="../assets/images/logo-white.png" class="img-fluid" alt="logo" />
                           </a>
                           <!--===============spacing==============-->
                           <div class="pd_bottom_30"></div>
                           <!--===============spacing==============-->
                        </div>
                        <div class="content_box">
                           <p>
                              Duty the obligations of business will frequently occur that pleasure have too
                              repudiated annoyances endures accepted.
                           </p>
                           <div class="consulting">
                              <div class="image">
                                 <img src="../assets/images/authour-image.png" alt="need help" />
                              </div>
                              <div class="help_con">
                                 <h6>Need Help?</h6>
                                 <h2>
                                    <a href="#" target="_blank" rel="nofollow"> Free Consultation</a>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Get In Touch</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets get_in_touch_foo light_color">
                     <div class="get_intouch_inrfo">
                        <div class="foo_cont_inner">
                           <div class="top">
                              <h6> Location</h6>
                              <p>
                                 280 Granite Run Drive Suite #200
                                 Lancaster, PA 1760
                              </p>
                           </div>
                           <div class="bottom">
                              <h6> Contact</h6>
                              <div class="con_content">
                                 <h5> Phone :</h5>
                                 <a href="tel:+9806071234"> +98 060 712 34</a>
                              </div>
                              <div class="con_content">
                                 <h5> Mail Us :</h5>
                                 <a href="tel:sendmail@creote.com"> sendmail@creote.com</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Company</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets clearfix navigation_foo light_color style_one">
                     <div class="navigation_foo_box">
                        <div class="navigation_foo_inner">

                           <ul class="menu">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Contact</a></li>
                              <li><a href="#">Professionals</a></li>
                              <li><a href="#">Insights</a></li>
                              <li><a href="#">HR Solutions</a></li>
                           </ul>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Information</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets clearfix navigation_foo light_color style_one">
                     <div class="navigation_foo_box">
                        <div class="navigation_foo_box">
                           <div class="navigation_foo_inner">

                              <ul class="menu">
                                 <li><a href="#">How it’s Work</a></li>
                                 <li><a href="#">Partners</a></li>
                                 <li><a href="#">Testimonials</a></li>
                                 <li><a href="#">Key Areas</a></li>
                                 <li><a href="#">Case Studies</a></li>
                                 <li><a href="#">Pricing</a></li>
                              </ul>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                  <div class="footer_widgets wid_tit style_one">
                     <div class="fo_wid_title">
                        <h2>Essentials</h2>
                     </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_25"></div>
                  <!--===============spacing==============-->
                  <div class="footer_widgets clearfix navigation_foo light_color style_one">
                     <div class="navigation_foo_box">
                        <div class="navigation_foo_inner">

                           <ul class="menu">
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Infrastructure</a></li>
                              <li><a href="#">Client Support</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Terms of Use</a></li>
                              <li><a href="#">Sitemap</a></li>
                           </ul>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_50"></div>
         <!--===============spacing==============-->
      </div>
      <div class="creote-footer-copyright bg_dark_3">
         <!--===============spacing==============-->
         <div class="pd_top_10"></div>
         <!--===============spacing==============-->
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="footer_copy_content color_white">
                     © 2023 <a href="https://themeforest.net/user/steelthemes">Steelthemes.</a> All Rights
                     Reserved.
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-sm-12 text-end">
                  <div class="footer_copy_content_right">
                     <div class="social_media_v_one">
                        <ul>
                           <li>
                              <a href="#">
                                 <span class="fa fa-facebook"></span>
                                 <small>facebook</small>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="fa fa-twitter"></span>
                                 <small>twitter</small>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="fa fa-skype"></span>
                                 <small>skype</small>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <span class="fa fa-instagram"></span>
                                 <small>instagram</small>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="pd_bottom_10"></div>
         <!--===============spacing==============-->
      </div>
   </div>
   <!---==============footer end =================-->
   <!---==============mobile menu =================-->
   <div class="crt_mobile_menu">
      <div class="menu-backdrop"></div>
      <nav class="menu-box">
         <div class="close-btn"><i class="icon-close"></i></div>
         <form role="search" method="get" action="#">
            <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
            <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
         </form>
         <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
         </div>
      </nav>
   </div>
   <!---==============mobile menu end =================-->
   <!---==============search popup =================-->
   <div id="search-popup" class="search-popup">
      <div class="close-search"><i class="fa fa-times"></i></div>
      <div class="popup-inner">
         <div class="overlay-layer"></div>
         <div class="search-form">
            <fieldset>
               <form role="search" method="get" action="#">
                  <input type="search" class="search" placeholder="Search..." value="" name="s" title="Search" />
                  <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
               </form>
            </fieldset>
         </div>
      </div>
   </div>
   <!---==============search popup end =================-->
   <!---==============modal popup =================-->
   <div class="modal_popup one">
      <div class="modal-popup-inner">
         <div class="close-modal"><i class="fa fa-times"></i></div>
         <div class="modal_box">
            <div class="row">
               <div class="col-lg-5 col-md-12 form_inner">
                  <div class="form_content">
                     <form class="contact-form" method="post"
                        action="http://themepanthers.com/html/creote-html/elements/sendemail.php">
                        <p>
                           <label> Your name<br />
                              <input type="text" name="name" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Enter Your Name" />
                              <br />
                              <i class="fa fa-user"></i><br />
                           </label>
                        </p>
                        <p><label> Your email<br />
                              <input type="email" name="email" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Enter Your Email" />
                              <br />
                              <i class="fa fa-envelope"></i><br />
                           </label>
                        </p>
                        <p>
                           <label> Subject<br />
                              <input type="text" name="subject" value="" size="40" aria-required="true"
                                 aria-invalid="false" placeholder="Enter Your Subject" />
                              <br />
                              <i class="fa fa-folder"></i><br />
                           </label>
                        </p>
                        <p>
                           <label> Your message (optional)<br />
                              <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                 aria-invalid="false" placeholder="Enter Your Message"></textarea>
                              <br />
                              <i class="fa fa-comments"></i><br />
                           </label>
                        </p>
                        <p><input type="submit" value="Submit" /></p>
                     </form>
                  </div>
               </div>
               <div class="col-lg-7 col-md-12 about_company_inner">
                  <div class="abt_content">
                     <div class="logo">
                        <img src="assets/images/logo-default.html" alt="img" class="company_logo_modal">
                     </div>
                     <div class="text">
                        <p> The great explorer of the truth, the master-builder of human happiness no one rejects
                           dislikes avoids pleasure itself because it is pleasure but because know who do not those
                           how to pursue pleasures rationally encounter consequences that are extremely painful
                           desires to obtain.</p>
                        <a href="#">Read More</a>
                     </div>
                     <div class="post_contet_modal">
                        <h2> Latest News</h2>
                        <div class="post_enable">
                           <div class="modal_post_grid">
                              <a href="blog-single.html">
                                 <img width="852" height="812" src="assets/images/blog/blog-image-9.html"
                                    class="main_img wp-post-image" alt="img" />
                              </a>
                           </div>
                           <div class="modal_post_grid">
                              <a href="blog-single.html">
                                 <img width="852" height="812" src="assets/images/blog/blog-image-8.html"
                                    class="main_img wp-post-image" alt="img" />
                              </a>
                           </div>
                           <div class="modal_post_grid">
                              <a href="blog-single.html">
                                 <img width="852" height="812" src="assets/images/blog/blog-image-7.html"
                                    class="main_img wp-post-image" alt="img" />
                              </a>
                           </div>
                           <div class="modal_post_grid">
                              <a href="blog-single.html">
                                 <img width="852" height="812" src="assets/images/blog/blog-image-6.html"
                                    class="main_img wp-post-image" alt="img" />
                              </a>
                           </div>
                           <div class="modal_post_grid">
                              <a href="blog-single.html">
                                 <img width="852" height="812" src="assets/images/blog/blog-image-5.html"
                                    class="main_img wp-post-image" alt="img" />
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="copright">
                        © 2023 Creote. All Rights Reserved.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!---==============modal popup end=================-->
   <!---==============cart=================-->
   <div class="side_bar_cart" id="mini_cart">
      <div class="cart_overlay"></div>
      <div class="cart_right_conten">
         <div class="close">
            <div class="close_btn_mini"><i class="icon-close"></i></div>
         </div>
         <div class="cart_content_box">
            <div class="contnet_cart_box">
               <div class="widget_shopping_cart_content">
                  <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!---==============cart=================-->

   </div>
   <!-- Back to top with progress indicator-->
   <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!---========================== javascript ==========================-->
   <script type='text/javascript' src='../assets/js/jquery-3.6.0.min.js'></script>
   <script type='text/javascript' src='../assets/js/bootstrap.min.js'></script>
   <script type='text/javascript' src='../assets/js/jquery.fancybox.js'></script>
   <script type='text/javascript' src='../assets/js/jQuery.style.switcher.min.js'></script>
   <script type='text/javascript' src='../assets/js/jquery.flexslider-min.js'></script>
   <script type='text/javascript' src='../assets/js/color-scheme.js'></script>
   <script type='text/javascript' src='../assets/js/owl.js'></script>
   <script type='text/javascript' src='../assets/js/swiper.min.js'></script>
   <script type='text/javascript' src='../assets/js/isotope.min.js'></script>
   <script type='text/javascript' src='../assets/js/countdown.js'></script>
   <script type='text/javascript' src='../assets/js/simpleParallax.min.js'></script>
   <script type='text/javascript' src='../assets/js/appear.js'></script>
   <script type='text/javascript' src='../assets/js/jquery.countTo.js'></script>
   <script type='text/javascript' src='../assets/js/sharer.js'></script>
   <script type='text/javascript' src='../assets/js/validation.js'></script>
   <!-- map script -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
   <script src="../assets/js/gmaps.js"></script>
   <script src="../assets/js/map-helper.js"></script>
   <!-- main-js -->
   <script type='text/javascript' src='../assets/js/creote-extension.js'></script>
   <!---========================== javascript ==========================-->
</body>

<!-- Mirrored from themepanthers.com/html/creote-html/elements/content-box.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 06:01:10 GMT -->

</html>