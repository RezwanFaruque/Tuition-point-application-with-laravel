@extends('layouts.adminlayout')

@section('style')
    <style type="text/css">
        .card-body form {
            widows: 50%;
        }

    </style>
@endsection
@section('content')
    <div class="col-lg-7">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Upload Your Service Areas</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.saveservicearea') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select District</label>
                        <select required class="form-control mb-3 @error('district_id') is-invalid @enderror" name="district_id">
                            @foreach ($districts as $district)
                            
                                <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                                @error('district_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Area Name</label>
                        <input type="text"
                            class="form-control @error('area_name') is-invalid @enderror" id="" aria-describedby="
                            emailHelp" placeholder="Enter Area" name="area_name">
                        @error('area_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
