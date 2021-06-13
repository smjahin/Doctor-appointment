@extends('admin.layouts.master')

@section('content')


<div>
  <table id="data_table" class="table">
      <thead>
          <tr>
              <th class="nosort">Avatar</th>
              <th>Name</th>
              <th>Role</th>
              <th>Gender</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone number</th>
              <th>Department</th>
              <th>Education</th>
              <th>About</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td><img src="{{asset('images')}}/{{$user->image}}" alt="" width="100px" height="100px"></td>
              <td>{{$user->name}}</td>
              <td>{{$user->role->name}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->address}}</td>
              <td>{{$user->phone_number}}</td>
              <td>{{$user->department}}</td>
              <td>{{$user->education}}</td>
              <td>{{$user->description}}</td>

          </tr>


      </tbody>
  </table>


  




@endsection
