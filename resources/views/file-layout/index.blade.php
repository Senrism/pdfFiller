@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            {{ __('File Layout') }}
                            <a href="{{route('add-file')}}" class="btn btn-sm btn-success" style="float:right;">Add</a>
                        </div>
                        <div class="card-body">
                            <table class="datatable table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>File name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td style="width:10%;">{{$loop->iteration}}</td>
                                        <td>{{$u->name}}</td>
                                        <td style="width:20%;">
                                            <a href="" class="btn btn-sm btn-info">Preview</a>
                                            <a href="" class="btn btn-sm btn-danger">Drop</a>
                                            <a href="" class="btn btn-sm btn-primary">Print</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
