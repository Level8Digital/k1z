@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Contact | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('styles')
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
@endsection

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax">
    <div id="contact-map" style="width:100%;height:300px"></div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

<!-- Start Body Content -->
<div class="main" role="main">
<div id="content" class="content full">
  <div class="spacer-30"></div>
  <div class="container">
    <div class="listing-header margin-40">
      <h2>Contact Us</h2>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <i class="fa fa-home"></i></span> <b>K1Z Auto Sales</b><br>
        2351 2 Ave N.<br>
        Lethbridge, AB T1H 0C1<br><br>
        <i class="fa fa-phone"></i> <b>403-393-6696</b><br>
        <i class="fa fa-envelope"></i> <a href="mailto:example@info.com">contact@k1zautosales.ca</a><br><br>
        <i class="fa fa-home"></i> <b>Mon - Fri 9.00 - 6.00</b><br>
        <i class="fa fa-home"></i> <b>Sat 10.30 - 5.30</b><br>
        <i class="fa fa-home"></i> <b>Sun - CLOSED</b><br>
      </div>
      <div class="col-md-9 col-sm-8">
        <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input type="text" id="fname" name="First Name"  class="form-control input-lg" placeholder="First name*">
              </div>
              <div class="form-group">
                <input type="email" id="lname" name="Last Name"  class="form-control input-lg" placeholder="Last name">
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
              </div>
              <div class="form-group">
                <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
              </div>
              <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
            </div>
          </div>
        </form>
        <div class="clearfix"></div>
        <div id="message"></div>
      </div>
    </div>
  </div>
  <div class="spacer-75"></div>
</div>
</div>

@endsection

@section('scripts')
  <script src="{{ url('_site-assets/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
  <script src="{{ url('_site-assets/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
  <script src="{{ url('_site-assets/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
  <script src="{{ url('_site-assets/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
  <script src="{{ url('_site-assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
  <script src="{{ url('_site-assets/vendor/password-checker.js') }}"></script> <!-- Password Checker -->
  <script src="{{ url('_site-assets/js/bootstrap.js') }}"></script> <!-- UI -->
  <script src="{{ url('_site-assets/js/init.js') }}"></script> <!-- All Scripts -->
  <script src="{{ url('_site-assets/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->

@endsection
