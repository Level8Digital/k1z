@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Edit Vehicle</div>
        <div class="card-body">
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

          <div class="row">
            <form method="post" class="contact-form clearfix" action="/update-vehicle" enctype="multipart/form-data" style="width:100%;">

                <div class="col-md-6">
                  <h3>Details</h3>
                  @csrf
                  <input type="hidden" name="id" value="{{ $vehicle->id }}">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" name="stock_num"  class="form-control input-lg" placeholder="Stock Number *" value="{{ old('stock_num', $vehicle->stock_num ) }}">
                        @error('stock_num')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <!--<div class="form-group">
                        <input type="text" name="vin"  class="form-control input-lg" placeholder="VIN *" value="{{ old('vin', $vehicle->vin) }}">
                        @error('vin')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>-->
                      <div class="form-group">
                        <input type="text" name="year"  class="form-control input-lg" placeholder="Year *" value="{{ old('year', $vehicle->year) }}">
                        @error('year')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="make"  class="form-control input-lg" placeholder="Make *" value="{{ old('make', $vehicle->make) }}">
                        @error('make')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="model"  class="form-control input-lg" placeholder="Model *" value="{{ old('model', $vehicle->model) }}">
                        @error('model')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="trim"  class="form-control input-lg" placeholder="Trim *" value="{{ old('trim', $vehicle->trim) }}">
                        @error('trim')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="kms"  class="form-control input-lg" placeholder="Mileage *" value="{{ old('kms', $vehicle->kms) }}">
                        @error('kms')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="color"  class="form-control input-lg" placeholder="Color *" value="{{ old('color', $vehicle->color) }}">
                        @error('color')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="trans"  class="form-control input-lg" placeholder="Transmission *" value="{{ old('trans', $vehicle->trans) }}">
                        @error('trans')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="price"  class="form-control input-lg" placeholder="Price *" value="{{ old('price', $vehicle->price) }}">
                        @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <textarea cols="6" rows="8" name="desc" class="form-control input-lg" placeholder="Description">{{ old('desc', $vehicle->desc) }}</textarea>
                        @error('desc')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div><!-- / FORM COL DETAILS -->

                <div class="col-md-6">
                  <h3>Add Images</h3>
                  <input type="file" name="images[]" multiple>
                  @error('images')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="row">
                    <div class="col-md-12">
                      <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Save vehicle!">
                    </div>
                  </div>
                  </form>
                  <hr class="fw">
                  @if(count($vehicle->images) > 0)
                    <form method="POST" action="/remove-images">
                      @csrf
                      <input type="hidden" name="inventory_id" value="{{ $vehicle->id }}">
                      <h3>Current Images</h3>
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-12">
                            <button class="btn btn-default btn-sm pull-right">Remove Selected</button>
                          </div>
                        </div>
                        <div class="row" style="margin-top: 5px">
                          @foreach($vehicle->images as $img)
                            <div class="col-md-4" style="margin-top:10px;">
                              <img src="{{ url('storage/images/' . $img->src) }}" style="max-height:115px;"><br />
                              <input type="checkbox" name="toRemove[]" value="{{ $img->id }}"> Remove
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </form>
                  @endif
                </div> <!-- / FORM COL -->



          </div><!-- / ROW -->

        </div>
      </div><!-- / CARD -->
    </div>
  </div>
</div><!--/ CONTAINER -->
@endsection
