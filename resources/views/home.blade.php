@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <!-- UPLOAD CSV FILE -->
                  <div class="tab-pane">
                    <h3>Upload CSV File</h3>
                    <div class="lighter"><p><strong>1.</strong> Export vehicles from Kijiji into a .xls file. <strong>2.</strong> Save .xls file as a .csv file in Excel or Google Sheets. <strong>3.</strong> Upload .csv file below.</p></div>

                    <form method="POST" actions="" enctype="multipart/form-data">
                      <input type="file">
                      <div class="row" style="margin-top: 25px;">
                        <button class="btn btn-info pull-right" type="submit" style="margin-left: 15px;">Upload</button>
                      </div>
                    </form>

                    <hr class="fw">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
