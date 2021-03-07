@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Financing | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ url('_site-assets/images/vehicle.jpeg') }});">
    <div class="container">
      <h1 class="page-title">Your Next Vehicle?</h1>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">{{ $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model}}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Body Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
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

        <!-- Vehicle Details -->
        <article class="single-vehicle-details">
          <div class="single-vehicle-title">
            <span class="badge-premium-listing">Premium listing</span>
            <h2 class="post-title">{{ $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model}}</h2>
          </div>
          <div class="single-listing-actions">
            @if($vehicle->price != 0)
              <div class="btn btn-info price">${{ number_format($vehicle->price) }}</div>
            @elseif($vehicle->price == 0)
              <div class="btn btn-info price">Contact us</div>
            @endif
          </div>
          <div class="row">
            <div class="col-md-8">
              @if(count($vehicle->images) > 0)
                <div class="single-listing-images">
                  <div class="featured-image format-image">
                      <a href="{{ url('storage/images/' . $vehicle->images[0]->src) }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ url('storage/images/' . $vehicle->images[0]->src) }}" alt="" style="width:100%;"></a>
                  </div>
                  <div class="additional-images">
                    <ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
                      @foreach($vehicle->images as $img)
                      <li class="item format-image"> <a href="{{ url('storage/images/' . $img->src) }}" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ url('storage/images/' . $img->src) }}" alt=""></a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              @else
                <div class="single-listing-images">
                  <div class="featured-image format-image">
                      <a href="https://placehold.it/890x600&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/890x600&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                  </div>
                  <div class="additional-images">
                    <ul class="owl-carousel" data-columns="4" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-mobile="3">
                      <li class="item format-video"> <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                      <li class="item format-image"> <a href="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                      <li class="item format-image"> <a href="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                      <li class="item format-image"> <a href="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                      <li class="item format-image"> <a href="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="https://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              @endif

              @if($vehicle->desc != null)
              <div class="tabs vehicle-details-tabs" style="margin-top: 35px;">
                  <ul class="nav nav-tabs">
                      <li class="active"> <a data-toggle="tab" href="#vehicle-overview">Overview</a></li>
                  </ul>
                  <div class="tab-content">
                      <div id="vehicle-overview" class="tab-pane fade in active">
                        <p>{{ $vehicle->desc }}</p>
                      </div>
                  </div>
              </div>
              @endif
            </div>
            <div class="col-md-4">
              <div class="sidebar-widget widget">
                <ul class="list-group">
                  <li class="list-group-item"> <span class="badge">Year</span> {{ $vehicle->year }}</li>
                  <li class="list-group-item"> <span class="badge">Make</span> {{ $vehicle->make }}</li>
                  <li class="list-group-item"> <span class="badge">Model</span> {{ $vehicle->model }}</li>
                  <li class="list-group-item"> <span class="badge">Mileage</span> {{ number_format($vehicle->kms) }} km</li>
                  <li class="list-group-item"> <span class="badge">Transmission</span> {{ $vehicle->trans }}</li>
                  <li class="list-group-item"> <span class="badge">Condition</span> Pre-Owned</li>
                  <li class="list-group-item"> <span class="badge">Color</span> {{ $vehicle->color }}</li>
                </ul>
              </div>
              <!-- Vehicle Enquiry -->
              <div class="sidebar-widget widget seller-contact-widget">
                <h4 class="widgettitle">Send enquiry</h4>
                <div class="vehicle-enquiry-in">
                  <form method="post" name="contactform" class="contact-form clearfix" action="/send-contact">
                    @csrf
                    <input type="hidden" name="vehicle" value="{{ $vehicle->stock_num . ' - ' . $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model . ' - ' . $vehicle->vin }}"/>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" id="fname" name="firstname"  class="form-control" placeholder="First name *" value="{{ old('firstname') }}">
                          @error('firstname')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" id="lname" name="lastname"  class="form-control" placeholder="Last name *" value="{{ old('lastname') }}">
                          @error('lastname')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" id="email" name="email"  class="form-control" placeholder="Email *" value="{{ old('email') }}">
                          @error('email')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea cols="6" rows="8" name="message" class="form-control" placeholder="Message *">{{ old('message') }}</textarea>
                          @error('message')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <input type="text" name="captcha" class="form-control" placeholder="{{ session('a12Ty9UkJ1') }}">
                          @error('captcha')
                              <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Send now!">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="vehicle-enquiry-foot">
                    <span class="vehicle-enquiry-foot-ico"><i class="fa fa-phone"></i></span>
                    <strong>403-393-6696</strong>Call us today!
                </div>
              </div>
            </div>
          </div><!-- / CONTENT ROW -->
        </article>
        <div class="clearfix"></div>
      </div><!-- / CONTAINER -->
    </div>
  </div>
  <!-- End Body Content -->


@endsection
