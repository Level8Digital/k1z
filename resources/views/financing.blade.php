@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Financing | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

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
  <div class="page-header parallax" style="background-image:url(http://placehold.it/1200x300&amp;text=IMAGE+PLACEHOLDER);">
    <div class="container">
      <h1 class="page-title">Financing</h1>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Financing</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Body Content -->
  <div class="main" role="main">
    <div id="content" class="content full padding-b0">
      <div class="container">
        <!-- Welcome Content and Services overview -->
        <div class="row">
          <div class="col-md-6">
            <h1 class="uppercase strong">What can we offer?</h1>
            <p class="lead">Bad credit or no credit we will get you <span class="accent-color">approved!</span></p>
          </div>
          <div class="col-md-6">
            <p>We understand that not everyone has the best credit history and we pride ourselves in our ability to genuinely help those individuals out via our Credit Rebuilding Program. </p>
            <p>Whether you have good credit, bad credit or no credit at all, we’re able to find you the best vehicle tailored to your needs based on your current financial situation.
            </p>
          </div>
        </div>

        <hr class="fw">
        <div class="spacer-75"></div>

        <div class="row">
          <div class="col-md-6">
            <p class="drop-caps">We cater to all car buyers, not just “sub-prime”. We carry anything from a reliable Toyota Camry to a swanky Audi R8! Rest assured, if we don’t have what you’re looking for, we will help you locate what you’re looking for. If you’re happy with your current vehicle but are interested in lowering your existing payments, we can help with that too. Speak with one of our sales consultants today about refinancing options.
            Get behind the wheel of a pristine pre-owned car in Lethbridge with smart auto loans from K1Z Auto Sales.</p>
            <ul class="checks" style="margin-left: 25px;">
              <li><i class="icon icon-envelope-alt"></i>Payment plans within your budget</li>
              <li><i class="icon icon-envelope-alt"></i>A wide-range of interest rates and finance terms</li>
              <li><i class="icon icon-envelope-alt"></i>Credit consolidation</li>
              <li><i class="icon icon-envelope-alt"></i>Low bi-weekly payments (O.A.C)</li>
              <li><i class="icon icon-envelope-alt"></i>Private sale financing</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="{{ url('_site-assets/images/financing.jpeg') }}" />
          </div>
        </div>
        <hr class="fw">
        <div class="spacer-75"></div>
        
      </div> <!-- / container -->

    </div><!-- /content -->
  </div>
  <!-- End Body Content -->


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
