@extends('layouts.app')
@section('content')
    @if (\Session::has('stored'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('stored') !!}</li>
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('File Layout') }}
                            <a href="{{route('select-file')}}" class="btn btn-sm btn-dark" style="float:right;">Back</a>
                        </div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'store-file' ]) }}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-12">
                                            {{Form::text('Filename', '', ['class' => 'form-control', 'placeholder' => 'File name', 'autofocus' => 'true'])}}

                                            @error('Filename')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col-lg-4 col-12">
                                            {{Form::file('File')}}
                                            @error('File')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4 col-12">
                                            {{Form::submit('Save Layout', ['class' => 'btn btn-success btn-md'])}}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
