<!DOCTYPE HTML>
<html class="no-js">
<head>
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- CSS
    ================================================== -->
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
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">


<!-- Start Site Header -->
<div class="site-header-wrapper">
  <header class="site-header">
    <div class="container sp-cont">
      <div class="site-logo">
          <h1><a href="index.html"><img src="{{ url('_site-assets/images/logo-new.png') }}" alt="Logo"></a></h1>
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
          <form>
            <h3>Find a Car with our Quick Search</h3>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Postcode</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                      <label>Body Type</label>
                      <select name="Body Type" class="form-control selectpicker">
                          <option selected>Any</option>
                          <option>Wagon</option>
                          <option>Minivan</option>
                          <option>Coupe</option>
                          <option>Crossover</option>
                          <option>Van</option>
                          <option>SUV</option>
                          <option>Minicar</option>
                          <option>Sedan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Make</label>
                      <select name="Make" class="form-control selectpicker">
                          <option selected>Any</option>
                          <option>Jaguar</option>
                          <option>BMW</option>
                          <option>Mercedes</option>
                          <option>Porsche</option>
                          <option>Nissan</option>
                          <option>Mazda</option>
                          <option>Acura</option>
                          <option>Audi</option>
                          <option>Bugatti</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Model</label>
                      <select name="Model" class="form-control selectpicker">
                          <option selected>Any</option>
                          <option>GTX</option>
                          <option>GTR</option>
                          <option>GTS</option>
                          <option>RLX</option>
                          <option>M6</option>
                          <option>S Class</option>
                          <option>C Class</option>
                          <option>B Class</option>
                          <option>A Class</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Price Min</label>
                      <select name="Min Price" class="form-control selectpicker">
                          <option selected>Any</option>
                          <option>$10000</option>
                          <option>$20000</option>
                          <option>$30000</option>
                          <option>$40000</option>
                          <option>$50000</option>
                          <option>$60000</option>
                          <option>$70000</option>
                          <option>$80000</option>
                          <option>$90000</option>
                          <option>$100000</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Price Max</label>
                      <select name="Max Price" class="form-control selectpicker">
                          <option selected>Any</option>
                          <option>$10000</option>
                          <option>$20000</option>
                          <option>$30000</option>
                          <option>$40000</option>
                          <option>$50000</option>
                          <option>$60000</option>
                          <option>$70000</option>
                          <option>$80000</option>
                          <option>$90000</option>
                          <option>$100000</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Brand new only
                      </label>
                      <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Certified
                      </label>
                    </div>
                  </div>
                </div>
                  <div class="col-md-6 col-sm-6">
                      <div class="row">
                          <div class="col-md-6">
                              <label>Min Year</label>
                              <select name="Min Year" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>2005</option>
                                  <option>2006</option>
                                  <option>2007</option>
                                  <option>2008</option>
                                  <option>2009</option>
                                  <option>2010</option>
                                  <option>2011</option>
                                  <option>2012</option>
                                  <option>2013</option>
                                  <option>2014</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label>Max Year</label>
                              <select name="Max Year" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>2005</option>
                                  <option>2006</option>
                                  <option>2007</option>
                                  <option>2008</option>
                                  <option>2009</option>
                                  <option>2010</option>
                                  <option>2011</option>
                                  <option>2012</option>
                                  <option>2013</option>
                                  <option>2014</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label>Min Mileage</label>
                              <select name="Min Mileage" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>10000</option>
                                  <option>20000</option>
                                  <option>30000</option>
                                  <option>40000</option>
                                  <option>50000</option>
                                  <option>60000</option>
                                  <option>70000</option>
                                  <option>80000</option>
                                  <option>90000</option>
                                  <option>100000</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label>Max Mileage</label>
                              <select name="Max Mileage" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>10000</option>
                                  <option>20000</option>
                                  <option>30000</option>
                                  <option>40000</option>
                                  <option>50000</option>
                                  <option>60000</option>
                                  <option>70000</option>
                                  <option>80000</option>
                                  <option>90000</option>
                                  <option>100000</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label>Transmission</label>
                              <select name="Transmission" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>5 Speed Manual</option>
                                  <option>5 Speed Automatic</option>
                                  <option>6 Speed Manual</option>
                                  <option>6 Speed Automatic</option>
                                  <option>7 Speed Manual</option>
                                  <option>7 Speed Automatic</option>
                                  <option>8 Speed Manual</option>
                                  <option>8 Speed Automatic</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              <label>Body Color</label>
                              <select name="Body Color" class="form-control selectpicker">
                                  <option selected>Any</option>
                                  <option>Red</option>
                                  <option>Black</option>
                                  <option>White</option>
                                  <option>Yellow</option>
                                  <option>Brown</option>
                                  <option>Grey</option>
                                  <option>Silver</option>
                                  <option>Gold</option>
                              </select>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <input type="submit" class="btn btn-block btn-info btn-lg" value="Find my vehicle now">
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
            	<li><a href="blog.html">Home</a></li>
            	<li><a href="blog-masonry.html">Vehicles</a></li>
            	<li><a href="about-html">Locate</a></li>
            </ul>
          </div>
      	  <div class="col-md-5 col-sm-6 footer_widget widget text_widget">
          	<h4 class="widgettitle">About K1Z</h4>
            <p>Founded in Lethbridge, Alberta, K1Z has quickly became a must stop in your search for top notch pre-owned cars and trucks. Our team works hard to ensure our customers always walk away from a deal with a smile on their face. </p>
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
              <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End site footer -->

  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

@yield('scripts')

</body>
</html>
