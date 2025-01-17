<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- StyleSheet -->
   	<link rel="stylesheet" href="http://webapplayers.com/inspinia_admin-v2.8/css/plugins/toastr/toastr.min.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ url('web/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('web/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ url('web/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ url('web/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ url('web/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ url('web/css/niceselect.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ url('web/css/animate.css') }}">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{ url('web/css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('web/css/owl-carousel.css') }}">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{ url('web/css/slicknav.min.css') }}">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ url('web/css/reset.css') }}">
	<link rel="stylesheet" href="{{ url('web/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('web/css/responsive.css') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	<div id="app">
		<deletemodal></deletemodal>
  <!-- Header -->
  <header class="header shop">

      <!-- Topbar -->
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <!-- Top Left -->
              <div class="top-left">
                <ul class="list-main">
                  <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                  <li><i class="ti-email"></i> support@shophub.com</li>
                </ul>
              </div>
              <!--/ End Top Left -->
            </div>
            <div class="col-lg-8 col-md-12 col-12">
              <!-- Top Right -->
              <div class="right-content">
                <ul class="list-main">
                  <li><i class="ti-location-pin"></i> Store location</li>
                  <li>
                    <i class="ti-alarm-clock"></i> <a >Daily deal</a>
                  </li>
                  <li><i class="ti-user"></i> <a >My account</a></li>
                  <li><i class="ti-power-off"></i><a href="{{ url('/login') }}">Login</a></li>
                </ul>
              </div>

              <!-- End Top Right -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Topbar -->

	  <!-- End Topbar -->
      <div class="middle-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
              <!-- Logo -->
              <div class="logo">
                <a href="index.html"
                  ><img src="images/logo.png" alt="logo" /></a>
              </div>
              <!--/ End Logo -->
              <!-- Search Form -->
              <div class="search-top">
                <div class="top-search">
                  <a href="hjj"><i class="ti-search"></i></a>
                </div>
                <!-- Search Form -->
                <div class="search-top">
                  <form class="search-form">
                    <input
                      type="text"
                      placeholder="Search here..."
                      name="search"
                    />
                    <button value="search" type="submit">
                      <i class="ti-search"></i>
                    </button>
                  </form>
                </div>
                <!--/ End Search Form -->
              </div>
              <!--/ End Search Form -->
              <div class="mobile-nav"></div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
              <div class="search-bar-top">
                <div class="search-bar">
                  <form>
                    <input
                      name="search"
                      placeholder="Search Products Here....."
                      type="search"/>
                    <button class="btnn"><i class="ti-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
			<cartcom></cartcom>
          </div>
        </div>
      </div>

      <!-- Header Inner -->
      <div class="header-inner" >
        <div class="container">
          <div class="cat-nav-head">
            <div class="row">
              <div class="col-lg-3">
                <div class="all-category">
                  <h3 class="cat-heading">
                    <i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES
                  </h3>
                
                  <!-- <ul class="main-category">
                    <li>
                      <a 
                        >New Arrivals
                        <i class="fa fa-angle-right" aria-hidden="true"></i
                      ></a>
                      <ul class="sub-category">
                        <li><a >accessories</a></li>
                        <li><a >best selling</a></li>
                        <li><a >top 100 offer</a></li>
                        <li><a >sunglass</a></li>
                        <li><a >watch</a></li>
                        <li><a >man’s product</a></li>
                        <li><a >ladies</a></li>
                        <li><a >westrn dress</a></li>
                        <li><a >denim </a></li>
                      </ul>
                    </li>
                    <li class="main-mega">
                      <a 
                        >best selling
                        <i class="fa fa-angle-right" aria-hidden="true"></i
                      ></a>
                      <ul class="mega-menu">
                        <li class="single-menu">
                          <a  class="title-link">Shop Kid's</a>
                          <div class="image">
                            <img
                              src="https://via.placeholder.com/225x155"
                              
                            />
                          </div>
                          <div class="inner-link">
                            <a >Kids Toys</a>
                            <a >Kids Travel Car</a>
                            <a >Kids Color Shape</a>
                            <a >Kids Tent</a>
                          </div>
                        </li>
                        <li class="single-menu">
                          <a  class="title-link">Shop Men's</a>
                          <div class="image">
                            <img
                              src="https://via.placeholder.com/225x155"
                              
                            />
                          </div>
                          <div class="inner-link">
                            <a >Watch</a>
                            <a >T-shirt</a>
                            <a >Hoodies</a>
                            <a >Formal Pant</a>
                          </div>
                        </li>
                        <li class="single-menu">
                          <a  class="title-link">Shop Women's</a>
                          <div class="image">
                            <img
                              src="https://via.placeholder.com/225x155"
                              
                            />
                          </div>
                          <div class="inner-link">
                            <a >Ladies Shirt</a>
                            <a >Ladies Frog</a>
                            <a >Ladies Sun Glass</a>
                            <a >Ladies Watch</a>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li><a >accessories</a></li>
                    <li><a >top 100 offer</a></li>
                    <li><a >sunglass</a></li>
                    <li><a >watch</a></li>
                    <li><a >man’s product</a></li>
                    <li><a >ladies</a></li>
                    <li><a >westrn dress</a></li>
                    <li><a >denim </a></li>
                  </ul> -->
        
                </div>
              </div>
              <div class="col-lg-9 col-12">
                <div class="menu-area" >
                  <!-- Main Menu -->
                  <nav class="navbar navbar-expand-lg">
                    <div class="navbar-collapse">
                      <div class="nav-inner">
                        <ul class="nav main-menu menu navbar-nav">
					
                          <li class="{{ '/' == request()->path() ? 'active' : '' }}">
						   <router-link to="/home">Home</router-link>
                          </li>
                          <li>  <router-link to="/shopgrid">Product</router-link></li>
                         
                          
                          <li>
                            <a 
                              >Shop<i class="ti-angle-down"></i
                              ><span class="new">New</span></a
                            >
                            <ul class="dropdown">
                              <li><router-link to="/cart">Cart</li>
                              <li>  <router-link to="/checkout">Checkout</router-link></li>
                            </ul>
                          </li>
                 
                          <li>  <router-link to="/contactus">Contact Us</router-link></li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <!--/ End Main Menu -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Header Inner -->
    </header>


    <!--/ End Header -->
	<router-view></router-view>
	</div>

	</div>

 
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

	<!-- Modal -->
<!-- <productmodal></productmodal> -->
	<!-- Modal end -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="images/logo2.png" ></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna
								eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor,
								facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456
										789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a >About Us</a></li>
								<li><a >Faq</a></li>
								<li><a >Terms & Conditions</a></li>
								<li><a >Contact Us</a></li>
								<li><a >Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a >Payment Methods</a></li>
								<li><a >Money-back</a></li>
								<li><a >Returns</a></li>
								<li><a >Shipping</a></li>
								<li><a >Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a ><i class="ti-facebook"></i></a></li>
								<li><a ><i class="ti-twitter"></i></a></li>
								<li><a ><i class="ti-flickr"></i></a></li>
								<li><a ><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com"
										target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
<script src="http://webapplayers.com/inspinia_admin-v2.8/js/plugins/toastr/toastr.min.js"></script>

	<script src="{{ url('web/js/jquery.min.js') }}"></script>
	<script src="{{ url('web/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ url('web/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ url('web/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ url('web/js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ url('web/js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ url('web/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ url('web/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ url('web/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ url('web/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ url('web/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ url('web/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ url('web/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ url('web/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ url('web/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ url('web/js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ url('web/js/active.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>


</body>

</html>