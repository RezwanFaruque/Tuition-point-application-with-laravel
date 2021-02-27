@extends('layouts.adminlayout')
@section('style')
    <style type="text/css">
        .row{
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Service District</h6>
                </div>
                <div class="card-body">
                  <form action="{{route('admin.addservicedistrict')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Add District</label>
                      <input type="text" name="district_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ">
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection