@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Financing | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ url('_site-assets/images/financing-top.jpeg') }});">
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


        <div class="row">
          <h2>About Financing</h2>
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


        <div class="row">
          <div class="col-md-12">
            <h2>Apply For Financing</h2>
            <form method="post" name="apply" class="contact-form clearfix" action="/send-financing">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="firstname" name="firstname"  class="form-control input-lg" placeholder="First Name *" value="{{ old('firstname') }}">
                    @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="lastname" name="lastname"  class="form-control input-lg" placeholder="Last Name *" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="birthday" name="birthday"  class="form-control input-lg" placeholder="Date of Birth *" value="{{ old('birthday') }}">
                    @error('birthday')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="sin" name="sin"  class="form-control input-lg" placeholder="S.I.N (Optional)" value="{{ old('sin') }}">
                    @error('sin')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="address" name="address"  class="form-control input-lg" placeholder="Address *" value="{{ old('address') }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="city" name="city"  class="form-control input-lg" placeholder="City *" value="{{ old('city') }}">
                    @error('city')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="postalcode" name="postalcode"  class="form-control input-lg" placeholder="Postal Code *" value="{{ old('postalcode') }}">
                    @error('postalcode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="resduration" name="resduration"  class="form-control input-lg" placeholder="Time at Residence *" value="{{ old('resduration') }}">
                    @error('resduration')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone Number *" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email *" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="employer" name="employer"  class="form-control input-lg" placeholder="Employer *" value="{{ old('employer') }}">
                    @error('employer')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="occupation" name="occupation"  class="form-control input-lg" placeholder="Occupation *" value="{{ old('occupation') }}">
                    @error('occupation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="income" name="income"  class="form-control input-lg" placeholder="Gross Income *" value="{{ old('income') }}">
                    @error('income')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="employerphone" name="employerphone"  class="form-control input-lg" placeholder="Employer Phone Number *" value="{{ old('employerphone') }}">
                    @error('employerphone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="employeraddress" name="employeraddress"  class="form-control input-lg" placeholder="Employer Address *" value="{{ old('employeraddress') }}">
                    @error('employeraddress')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="text" id="empduration" name="empduration"  class="form-control input-lg" placeholder="Time at Employer *" value="{{ old('empduration') }}">
                    @error('empduration')
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
          </div>
        </div><!-- / form row -->

        <div class="spacer-75"></div>

      </div> <!-- / container -->

    </div><!-- /content -->
  </div>
  <!-- End Body Content -->


@endsection
