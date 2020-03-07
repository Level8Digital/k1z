@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Vehicle</div>

                <div class="card-body">
                  @if(Session::has('success'))
                  <div class="alert alert-success">
                      {{Session::get('success')}}
                  </div>
                  @endif

                  <div class="row">
                    <div class="col-md-6">
                      <form method="post" name="" class="contact-form clearfix" action="">
                        @csrf
                        <input type="hidden" name="vehicle" value="">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" name="stock_num"  class="form-control input-lg" placeholder="Stock Number *" value="{{ old('stock_num') }}">
                              @error('stock_num')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="vin"  class="form-control input-lg" placeholder="VIN *" value="{{ old('vin') }}">
                              @error('vin')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="year"  class="form-control input-lg" placeholder="Year *" value="{{ old('year') }}">
                              @error('year')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="make"  class="form-control input-lg" placeholder="Make *" value="{{ old('make') }}">
                              @error('make')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="model"  class="form-control input-lg" placeholder="Model *" value="{{ old('model') }}">
                              @error('model')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="trim"  class="form-control input-lg" placeholder="Trim *" value="{{ old('Trim') }}">
                              @error('trim')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="kms"  class="form-control input-lg" placeholder="Mileage *" value="{{ old('kms') }}">
                              @error('kms')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="title"  class="form-control input-lg" placeholder="Title *" value="{{ old('title') }}">
                              @error('title')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="color"  class="form-control input-lg" placeholder="Color *" value="{{ old('color') }}">
                              @error('color')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="trans"  class="form-control input-lg" placeholder="Transmission *" value="{{ old('trans') }}">
                              @error('trans')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <input type="text" name="price"  class="form-control input-lg" placeholder="Price *" value="{{ old('price') }}">
                              @error('price')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <textarea cols="6" rows="8" name="desc" class="form-control input-lg" placeholder="Description *">{{ old('desc') }}</textarea>
                              @error('desc')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                          </div>
                        </div>
                      </form>
                    </div><!-- / FORM COL -->

                    <div class="col-md-6">

                    </div>
                  </div>



            </div>
        </div>
    </div>
</div>
@endsection
