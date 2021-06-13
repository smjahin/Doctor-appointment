
@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>List of all Dotors</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Doctors</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
      @if (Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
      @endif
        <div class="card">
            <div class="card-header"><h3>Data Table</h3></div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="nosort">Avatar</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th class="nosort">&nbsp;</th>
                            <th class="nosort">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if (count($users)>0)
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td><img src="{{asset('images')}}/{{$user->image}}" class="table-user-thumb" alt=""></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>
                                <div class="table-actions">

                                    <a href="{{route('doctor.showw',[$user->id])}}" {{--data-toggle="modal" data-target="#exampleModal{{$user->id}}"--}}>
                                       <i class="ik ik-eye">
                                    </a>
                                    <a href="{{route('doctor.edit',[$user->id])}}"><i class="ik ik-edit-2"></i></a>
                                    <a href="{{route('doctor.show',[$user->id])}}"><i class="ik ik-trash-2"></i></a>

                                </div>


                            </td>
                        </tr>
                        @endforeach

                        @else
                          <td>No Users to Display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctors Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="badge badge-pill badge-dark"><img src="{{asset('images')}}/{{$user->image}}" class="table-use-thumb"alt="" width="200px" height="200px"></p>
        <p>Name:{{$user->name}}</p>
        <p>Role:{{$user->role->name}}</p>
        <p>Gender:{{$user->gender}}</p>
        <p>Email:{{$user->email}}</p>
        <p>Address:{{$user->address}}</p>
        <p>Phone:{{$user->phone_number}}</p>
        <p>Department:{{$user->department}}</p>
        <p>Education:{{$user->education}}</p>
        <p>About:{{$user->description}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




@endsection
