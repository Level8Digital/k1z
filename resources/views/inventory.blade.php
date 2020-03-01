@extends('_site-layout')

@section('title', 'K1Z Auto Sales - Inventory | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

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
      <h1 class="page-title">Inventory</h1>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">Inventory</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Body Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <!-- Search Filters -->
          <div class="col-md-3 search-filters" id="Search-Filters">
            <div class="tbsticky filters-sidebar">
              <h3>Refine Search</h3>
              <div class="accordion" id="toggleArea">
                <!-- Filter by Year -->
                <div class="accordion-group panel">
                  <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne">Year<i class="fa fa-angle-down"></i> </a> </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <div class="form-inline">
                          <div class="form-group">
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
                          <div class="form-group last-child">
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
                        <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                      </div>
                    </div>
                  </div>
                </div> <!-- / Filter by year -->
                <!-- Filter by Make -->
                <div class="accordion-group panel">
                  <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo">Make<i class="fa fa-angle-down"></i> </a> </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="filter-options-list list-group">
                        <li class="list-group-item"><span class="badge">4</span><a href="#">Bentley</a></li>
                        <li class="list-group-item"><span class="badge">23</span><a href="#">Nissan</a></li>
                        <li class="list-group-item"><span class="badge">41</span><a href="#">Mercedes</a></li>
                        <li class="list-group-item"><span class="badge">6</span><a href="#">Ford</a></li>
                        <li class="list-group-item"><span class="badge">54</span><a href="#">Honda</a></li>
                        <li class="list-group-item"><span class="badge">9</span><a href="#">Mazda</a></li>
                        <li class="list-group-item"><span class="badge">38</span><a href="#">Toyota</a></li>
                        <li class="list-group-item"><span class="badge">45</span><a href="#">BMW</a></li>
                      </ul>
                    </div>
                  </div>
                </div><!-- / Filter by make -->
                <!-- Filter by Model -->
                <div class="accordion-group">
                  <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird">Model <i class="fa fa-angle-down"></i> </a> </div>
                  <div id="collapseThird" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="filter-options-list list-group">
                        <li class="list-group-item"><span class="badge">38</span><a href="#">Alpina</a></li>
                        <li class="list-group-item"><span class="badge">6</span><a href="#">M3</a></li>
                        <li class="list-group-item"><span class="badge">54</span><a href="#">M5</a></li>
                        <li class="list-group-item"><span class="badge">9</span><a href="#">M6</a></li>
                        <li class="list-group-item"><span class="badge">4</span><a href="#">X1</a></li>
                        <li class="list-group-item"><span class="badge">23</span><a href="#">X3</a></li>
                        <li class="list-group-item"><span class="badge">41</span><a href="#">X5</a></li>
                        <li class="list-group-item"><span class="badge">38</span><a href="#">Z3</a></li>
                        <li class="list-group-item"><span class="badge">38</span><a href="#">Z4</a></li>
                      </ul>
                    </div>
                  </div>
                </div><!-- / Filter by model -->

                <!-- Filter by Mileage -->
                <div class="accordion-group">
                  <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseFive">Mileage <i class="fa fa-angle-down"></i> </a> </div>
                  <div id="collapseFive" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <div class="form-inline">
                        <div class="form-group">
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
                        <div class="form-group last-child">
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
                        <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                      </div>
                    </div>
                  </div>
                </div><!-- / Filter by mileage -->

                <!-- Filter by Price -->
                <div class="accordion-group">
                  <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEight">Price <i class="fa fa-angle-down"></i> </a> </div>
                  <div id="collapseEight" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <div class="form-inline">
                        <div class="form-group">
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
                        <div class="form-group last-child">
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
                        <button type="submit" class="btn btn-default btn-sm pull-right">Filter</button>
                      </div>
                    </div>
                  </div>
                </div><!-- / Filter by price -->
              </div><!-- End Toggle -->
              <a href="#" class="btn-default btn-sm btn"><i class="fa fa-refresh"></i> Reset search</a>
              <a href="#" class="btn-primary btn-sm btn"><i class="fa fa-folder-o"></i> Save search</a>
            </div>
          </div>

          <!-- Listing Results -->
          <div class="col-md-9 results-container">
            <div class="results-container-in">
              <div id="results-holder" class="results-list-view">
                <!-- Result Item -->
                <div class="result-item format-standard">
                  <div class="result-item-image">
                    <a href="vehicle-details.html" class="media-box"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                    <span class="label label-default vehicle-age">2014</span>
                    <span class="label label-success premium-listing">Premium Listing</span>
                    <div class="result-item-view-buttons">
                      <a href="https://www.youtube.com/watch?v=P5mvnA4BV7Y" data-rel="prettyPhoto"><i class="fa fa-play"></i> View video</a>
                      <a href="vehicle-details.html"><i class="fa fa-plus"></i> View details</a>
                    </div>
                  </div>
                  <div class="result-item-in">
                    <h4 class="result-item-title"><a href="vehicle-details.html">Nissan Terrano single hand driven</a></h4>
                    <div class="result-item-cont">
                      <div class="result-item-block col1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam..</p>
                      </div>
                      <div class="result-item-block col2">
                        <div class="result-item-pricing">
                          <div class="price">$48000</div>
                        </div>
                        <div class="result-item-action-buttons">
                          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-star-o"></i> Save</a>
                          <a href="vehicle-details.html" class="btn btn-default btn-sm">Enquire</a><br>
                          <a href="#" class="distance-calc"><i class="fa fa-map-marker"></i> Distance from me?</a>
                        </div>
                      </div>
                    </div>
                    <div class="result-item-features">
                      <ul class="inline">
                        <li>4 door SUV</li>
                        <li>6 cyl, 3.0 L Petrol</li>
                        <li>6 speed Automatic</li>
                        <li>4x4 Wheel Drive</li>
                        <li>Listed by Individual</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- / Listing results -->
        </div>
      </div>
    </div>
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
