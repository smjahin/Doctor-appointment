@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="/banner/online-medicine.jpg" class="img-fluid" style="border: 1px solid #ccc;">
      </div>
      <div class="col-md-6">
        <h2>Create an account & Book your appointment</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Praesent eu rutrum velit, consequat pulvinar risus.
           Phasellus ornare ligula eget tellus condimentum, vel
           lobortis magna sodales. Nulla varius lectus sit amet
           felis ultrices, nec blandit tortor sagittis. Vestibulum
           ante ipsum primis in faucibus orci luctus et ultrices
           posuere cubilia curae; Morbi porttitor lacus ut urna porttitor, id euismod orci finibus. C
           lass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
           . Nam condimentum eleifend libero molestie scelerisque. Nam malesuada finibus ante,
           convallis faucibus nunc vulputate vitae.</p>
        <div class="mt-5">
          <a href="{{ url('/register') }}"><button class="btn btn-success">Register as Patient</button></a>
          <a href="{{ url('/login') }}"><button class="btn btn-secondary">Login</button></a>
        </div>
      </div>
    </div>
    <hr>
<!--search Doctor-->
<form action="{{ url('/') }}" method="GET">
    <div class="card">
      <div class="card-body">
        <div class="card-header">Find Doctors</div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">

              <input type="text"  name="date" class="form-control" id="datepicker">
            </div>
            <div class="col-md-4">
              <button class="btn btn-primary">Find Doctors</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

<!--Display Doctor-->
  <div class="card">
    <div class="card-body">
      <div class="card-header"> Doctors </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#@php
              $i=0
              @endphp</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Expertise</th>
              <th>Book</th>
            </tr>
          </thead>
          <tbody>
            @forelse($doctors as $doctor)
            <tr>
              <th scope="row">{{ $i=$i+1 }}</th>
              <td>
                <img src="{{ asset('images') }}/{{ $doctor->doctor->image }}" width="100px" style="border-radius: 50%;">
              </td>
              <td >
                {{ $doctor->doctor->name }}
              </td>
              <td>
                {{ $doctor->doctor->department }}
              </td>
              <td>
                <a href="{{ route('create.appointment',[$doctor->user_id, $doctor->date])}}"><button class="btn btn-success">Book Appointment</button></a>
              </td>
            </tr>
            @empty
              <td>No doctors available Today</td>
            @endforelse

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
