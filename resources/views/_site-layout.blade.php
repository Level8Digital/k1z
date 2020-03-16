<!DOCTYPE HTML>
<html class="no-js">
<head>
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="Founded in Lethbridge, Alberta, we provide quality used vehicles with an exclusive credit rebuilding program.">
  <meta name="keywords" content="Lethbridge, vehicles, used cars, used vehicles, preowned, pre-owned">
  <meta name="author" content="Firestarter Digital">
  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <link rel="apple-touch-icon" sizes="57x57" href="{{ url('_site-assets/favicon/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ url('_site-assets/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ url('_site-assets/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('_site-assets/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ url('_site-assets/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ url('_site-assets/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ url('_site-assets/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ url('_site-assets/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('_site-assets/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ url('_site-assets/favicon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('_site-assets/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ url('_site-assets/favicon/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('_site-assets/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ url('_site-assets/favicon/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#112983">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#112983">
  <!-- CSS
    ================================================== -->
  <link href="{{ url('_site-assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('_site-assets/vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="{{ url('css/ie.css') }}" media="screen" /><![endif]-->
  <link href="{{ url('_site-assets/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
  <!-- Color Style -->
  <link href="{{ url('_site-assets/css/colors/color5.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ url('_site-assets/js/modernizr.js') }}"></script><!-- Modernizr -->
  @yield('styles')

  <!-- SCRIPTS
    ================================================== -->
  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

</head>
<body class="home header-v2">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="https://browsehappy.com/">Upgrade your browser today</a> or <a href="https://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">


<!-- Start Site Header -->
<div class="site-header-wrapper">
  <header class="site-header">
    <div class="container sp-cont">
      <div class="site-logo">
          <h1><a href="/"><img src="{{ url('_site-assets/images/k1z-logo-alt.png') }}" alt="Logo"></a></h1>
          <span class="site-tagline">Buying or Selling,<br>just got easier!</span>
      </div>
      <div class="header-right">

      </div>
    </div>
  </header> <!-- End Site Header -->
  <div class="navbar">
    <div class="container sp-cont">
      <div class="search-function">
          <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
          <span><i class="fa fa-phone"></i> Call us <strong>403-393-6696</strong> <em>or</em> search</span>
      </div>
      <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
      <!-- Main Navigation -->
      <nav class="main-navigation dd-menu toggle-menu" role="navigation">
        <ul class="sf-menu">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="/inventory">Inventory</a>
          </li>
          <li><a href="/financing">Financing</a>
          </li>
          <li>
            <a href="/faqs">FAQs</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- Search Form -->
      <div class="search-form">
        <div class="search-form-inner">
          <form method="POST" action="/filter-inventory">
            @csrf
            <h3>Find a Car with our Quick Search</h3>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                    <label>Make</label>
                    <select name="makes[]" class="form-control selectpicker">
                      <option selected value="any">Any</option>
                        @foreach($makes as $mk)
                        <option value="{{ $mk->make }}">{{ $mk->make }} ({{ $mk->total }})</option>
                        @endforeach

                    </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Min Year</label>
                  <select name="minyear" class="form-control selectpicker">
                    <option selected value="any">Any</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <div class="form-group">
                    <label>Max Year</label>
                    <select name="maxyear" class="form-control selectpicker">
                        <option selected value="any">Any</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <div class="form-group">
                    <label>Max Mileage</label>
                    <select name="maxmileage" class="form-control selectpicker">
                      <option selected value="any">Any</option>
                      <option value="50000">50,00 km</option>
                      <option value="75000">75,000 km</option>
                      <option value="100000">100,00 km</option>
                      <option value="150000">150,00 km</option>
                      <option value="200000">200,00 km</option>
                      <option value="250000">250,00 km</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <div class="form-group">
                    <label>Max Price</label>
                    <select name="maxprice" class="form-control selectpicker">
                      <option selected value="any">Any</option>
                      <option value="5000">$5,000</option>
                      <option value="10000">$10,000</option>
                      <option value="20000">$20,000</option>
                      <option value="30000">$30,000</option>
                      <option value="40000">$40,000</option>
                      <option value="50000">$50,000</option>
                      <option value="100000">$100,000</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <div class="form-group">
                    <br />
                    <button type="submit" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Find My Vehicle</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
 	</div>

  @yield('content')

  <!-- Start site footer -->
  <footer class="site-footer">
    <div class="site-footer-top">
      <div class="container">
        <div class="row">
        	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
            <h4 class="widgettitle">Sitemap</h4>
            <ul>
              <li>
                <a href="/">Home</a>
              </li>
              <li>
                <a href="/inventory">Inventory</a>
              </li>
              <li><a href="/financing">Financing</a>
              </li>
              <li>
                <a href="/faqs">FAQs</a>
              </li>
              <li>
                <a href="/contact">Contact</a>
              </li>
            </ul>
          </div>
      	  <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
          	<h4 class="widgettitle">About K1Z</h4>
            <p>Founded in Lethbridge, Alberta, K1Z has quickly became a must stop in your search for quality used cars and
              trucks. Our team works hard to ensure our customers always walk away from a deal with a smile on their face. Come browse
              our huge stock of vehicles or tell us what you're looking for so we can find it for you.</p>
          </div>
          <div class="col-md-5 alt-logo">
            <img src="{{ url('_site-assets/images/k1z-alt-logo2.png') }}" alt="alternate-logo">
          </div>
        </div>
      </div>
    </div>
    <div class="site-footer-bottom">
      <div class="container">
        <div class="row">
        	<div class="col-md-6 col-sm-6 copyrights-left">
            <p>&copy; 2020 K1Z Auto Sales Ltd. All Rights Reserved</p>
          </div>
          <div class="col-md-6 col-sm-6 copyrights-right">
            <ul class="social-icons social-icons-colored pull-right">
              <li class="googleplus"><a href="https://www.google.com/maps/place/K1Z+AUTO+SALE+%26+REPAIRS/@49.700483,-112.8091548,17z/data=!4m7!3m6!1s0x0:0x162a4093be70ae1d!8m2!3d49.700483!4d-112.8069661!9m1!1b1" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End site footer -->

  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

<script src="{{ url('_site-assets/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ url('_site-assets/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{ url('_site-assets/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
<script src="{{ url('_site-assets/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{ url('_site-assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
<script src="{{ url('_site-assets/vendor/password-checker.js') }}"></script> <!-- Password Checker -->
<script src="{{ url('_site-assets/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ url('_site-assets/js/init.min.js') }}"></script> <!-- All Scripts -->
<script src="{{ url('_site-assets/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
@yield('scripts')

</body>
</html>
