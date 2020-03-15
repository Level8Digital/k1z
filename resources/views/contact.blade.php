@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Contact | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('styles')
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.css' rel='stylesheet' />
@endsection

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax">
    <div id='map' style='width: 100%; height: 450px;'></div>
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
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
    @endif
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
        <form method="post" name="contactform" class="contact-form clearfix" action="/send-contact">
          @csrf
          <input type="hidden" name="vehicle" value="">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <input type="text" id="fname" name="firstname"  class="form-control input-lg" placeholder="First name *" value="{{ old('firstname') }}">
                @error('firstname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" id="lname" name="lastname"  class="form-control input-lg" placeholder="Last name *" value="{{ old('lastname') }}">
                @error('lastname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email *" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone" value="{{ old('phone') }}">
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <textarea cols="6" rows="8" name="message" class="form-control input-lg" placeholder="Message *">{{ old('message') }}</textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="text" name="captcha" class="form-control input-lg" placeholder="{{ session('a12Ty9UkJ1') }}">
                @error('captcha')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
  <script>
  	mapboxgl.accessToken = 'pk.eyJ1IjoiZXNzZW5jZS1kaWdpdGFsIiwiYSI6ImNpdjVuMnptYjAxaXIyenRqYXRtdWp5NTIifQ.D_OaRBdX_9Wwx8vlpGN_KA';
  var map = new mapboxgl.Map({
  container: 'map', // container id
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-112.8071546, 49.7001103], // starting position
  zoom: 14,
  dragPan: false // starting zoom
  });

  // Add zoom and rotation controls to the map.
  map.addControl(new mapboxgl.NavigationControl());

  new mapboxgl.Marker().setLngLat([-112.8071546, 49.7001103]).addTo(map);

  </script>

@endsection
