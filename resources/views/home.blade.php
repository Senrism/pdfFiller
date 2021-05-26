@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Layout Pdf</h5>
                                  <p class="card-text">Show Stored Layout And Saving Layout</p>
                                  <a href="{{route('select-file')}}" class="btn btn-primary">Click To Go</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Fill Data</h5>
                                  <p class="card-text">Filling Data To Layouted Pdf , Saved Or New</p>
                                  <a href="#" class="btn btn-primary">Fill Page</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Log Data</h5>
                                  <p class="card-text">Logging Created Data</p>
                                  <a href="#" class="btn btn-primary">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
