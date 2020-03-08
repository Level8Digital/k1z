@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

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

                  <!-- UPLOAD CSV FILE -->
                  <div class="tab-pane">
                    <h3>Upload .XLSX File</h3>
                    <div class="lighter"><p><strong>1.</strong> Export vehicles from Kijiji into a .xls file. <strong>2.</strong> Save .xls file as a .xlsx file in Excel or Google Sheets. <strong>3.</strong> Upload .xlsx file below.</p></div>

                    <form method="POST" action="/import-xls" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="xls">
                      <div class="row" style="margin-top: 25px;">
                        <button class="btn btn-info pull-right" type="submit" style="margin-left: 15px;">Upload</button>
                      </div>
                    </form>
                    <hr class="fw">
                </div><!-- / UPLOAD CSV FILE -->

                <div class="dashboard-block">
                  <form method="POST" action="/remove-vehicles">
                    @csrf
                    <div class="dashboard-block-head">
                      <button type="submit" class="btn btn-danger btn-sm pull-right">Remove Selected</button>
                      <a href="/add-vehicle" class="btn btn-default btn-sm pull-right" style="margin-right:15px;">Add Vehicle</a>
                      <h3>Inventory</h3>
                    </div>
                    <div class="table-responsive">

                        <table class="table table-bordered dashboard-tables saved-cars-table">
                          <thead>
                            <tr>
                              <td></td>
                              <td>Description</td>
                              <td>Price</td>
                              <td>Payment</td>
                              <td>Actions</td>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($inventory as $vehicle)

                              <tr>
                                <td valign="middle">
                                  <input type="checkbox" name="vehicles[]" value="{{ $vehicle->id }}">
                                </td>
                                <td>
                                  <!-- Result -->
                                  <a href="vehicle-details.html" class="car-image"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                  <div class="search-find-results">
                                    <h5><a href="vehicle-details.html">{{ $vehicle->year . ' ' . $vehicle->make . ' ' . $vehicle->model . ' | ' . $vehicle->stock_num }}</a></h5>
                                    <ul class="inline">
                                      <li>{{ $vehicle->vin }}</li>
                                      <li>{{ $vehicle->trim }}</li>
                                      <li>{{ $vehicle->trans }}</li>
                                      <li>{{ $vehicle->color }}</li>
                                    </ul>
                                  </div>
                                </td>
                                <td><span class="price">${{ number_format($vehicle->price) }}</span></td>
                                <td align="center"><span class="label label-warning">Pending payment</span></td>
                                <td align="center">
                                    <a href="/edit-vehicle/{{ $vehicle->id }}" class="text-default btn" title="Edit"><i class="fa fa-archive"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>

                    </div>
                    <div style="text-align:center;">
                      {{ $inventory->links() }}
                    </div>
                    </form>
                  </div>


            </div>
        </div>
    </div>
</div>
@endsection
