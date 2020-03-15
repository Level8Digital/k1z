@extends('_site-layout')

@section('title', 'K1Z Auto Sales - F.A.Q. | Lethbridge, Alberta | Quality Pre-Owned/Used Vehicles')

@section('content')
  <!-- Start Page header -->
  <div class="page-header parallax" style="background-image:url({{ url('_site-assets/images/faq.jpeg') }});">
    <div class="container">
      <h1 class="page-title">F.A.Q.</h1>
    </div>
  </div>

  <!-- Utiity Bar -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-8">
          <ol class="breadcrumb">
              <li><a href="/">Home</a></li>
              <li class="active">F.A.Q</li>
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
        <div class="row">
          <div class="container">
            <h4 class="accent-color short">K1Z Auto Sales F.A.Q.</h4>
            <h3>Common Questions Asked by People Who Haven't Used Our Services Yet</h3>
            <div class="spacer-30"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="accordion" id="toggleArea">
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseOne"> Do you take trade-in’s?<i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseOne" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Yes, we accept all trades at fair market price. The price will be determined once we appraise your vehicle and determine what your current vehicle is worth.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseTwo"> Do you offer warranty?<i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Yes! K1Z AUTO SALES offers a comprehensive warranty to all of our customers.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseThird"> Do you provide carproof? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseThird" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Yes! All of our vehicles come with a CarFax and a full mechanical fitness inspection.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseForth"> How can I rebuild my credit? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseForth" class="accordion-body collapse">
                      <div class="accordion-inner">
                        The best way to rebuild credit is to get yourself an installment loan. Some effective ways are through financing a vehicle or paying off a credit card. The key is to make your payments on time (this goes for phone and utility bills, as well). By being responsible with an installment loan on a vehicle, the credit bureau will keep track of your efforts and it will prove to the banks that you are trustworthy for future loans. Keep in mind, it takes both time and patience. Make a point to pay your bills on time, and you’ll quickly re-establish your credit.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSixth"> I’ve been declined elsewhere. Can I still get approved for financing? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseSixth" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Of course! K1Z AUTO SALES has an incredibly high rate of approvals, even if you’ve been declined before. The process is quick, easy and hassle-free; just fill out our 30 second online credit application and leave the rest to us! Your information is strictly confidential and will never be shared with third-party companies. Once we get the approval from our lenders, we’ll work our magic and find the perfect vehicle fit for you.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseSeventh"> How long does the process take? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseSeventh" class="accordion-body collapse">
                      <div class="accordion-inner">
                        From the time you fill out an application, we’ll get the process started within just a few short hours. In the best circumstances, we can even have you driving away in your new vehicle within just 24-48 hours! It’s really that easy.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group panel">
                    <div class="accordion-heading togglize"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#collapseEighth"> Can I purchase a vehicle if I live out of province? <i class="fa fa-plus-circle"></i> <i class="fa fa-minus-circle"></i> </a> </div>
                    <div id="collapseEighth" class="accordion-body collapse">
                      <div class="accordion-inner">
                        Yes! In fact, we have many buyers from out-of-province. We can either arrange to have the vehicle shipped to you or you can come drive it home yourself!
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Toggle -->
              </div><!-- / col -->
            </div><!-- / row -->
          </div>
        </div>
      </div><!-- /faq container -->
      <div class="spacer-75"></div>
    </div>
  </div>
  <!-- End Body Content -->


@endsection
