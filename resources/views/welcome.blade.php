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
<!--Date picker component-->
  <find-doctor></find-doctor>

</div>
@endsection
