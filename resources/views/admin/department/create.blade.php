@extends('admin.layouts.master')

@section('content')
  <div class="page-header">
      <div class="row align-items-end">
          <div class="col-lg-8">
              <div class="page-header-title">
                  <i class="ik ik-edit bg-blue"></i>
                  <div class="d-inline">
                      <h5>Doctors</h5>
                      <span>Add Doctor</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <nav class="breadcrumb-container" aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a href="../index.html"><i class="ik ik-home"></i></a>
                      </li>
                      <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Create</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-10">
      @if (Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
      @endif
      <div class="card">
        <div class="card-header"><h3>Add Department</h3></div>
        <div class="card-body">
          <form class="form-sample" action="{{route('department.store')}}"method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                <label for="">Department Name</label>
                <input type="text" name="department" class="form-control @error('department') is-invalid @enderror"
                placeholder="Department name" value="{{old('department')}}">

                @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </div>



          </form>
        </div>
      </div>
    </div>

  </div>
@endsection
