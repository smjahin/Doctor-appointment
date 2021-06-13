@extends('admin.layouts.master')

@section('content')
  <div class="page-header">
      <div class="row align-items-end">
          <div class="col-lg-8">
              <div class="page-header-title">
                  <i class="ik ik-edit bg-blue"></i>
                  <div class="d-inline">
                      <h5>Doctors</h5>
                      <span>Appointment Time</span>
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
                      <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>

  <div class="container">
    @if (Session::has('message'))
      <div class="alert alert-success">
        {{Session::get('message')}}
      </div>
    @endif
    @if(Session::has('errmessage'))
            <div class="alert bg-danger alert-success text-white" role="alert">
                {{Session::get('errmessage')}}
            </div>
        @endif

    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
    @endforeach

    <form action="{{route('appointment.check')}}" method="post">
    @csrf

      <div class="card">
        <div class="card-header">
          Choose date
          <br>

          @if (isset($date))
            Your Timeable for:
            {{$date}}
          @endif

        </div>
        <div class="card-body">
         <input type="text" class="form-control datetimepicker-input"
         id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date" >
         <br>
         <button type="submit" class="btn btn-primary">check</button>
        </div>
      </div>

    </form>

    @if (Route::is('appointment.check'))
      <form action="{{ route('update') }}" method="post">
        @csrf
    <div class="card">
      <div class="card-header">
        Choose AM Time
        <span style="margin-left: 700px">Check/Uncheck
          <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]'))
          document.getElementsByName('time[]').item(c).checked=this.checked" >
           </span>
        </span>
      </div>


      <div class="card-body">
        <table class="table table-striped">

           <tbody>
              <input type = "hidden" name="appoinmentId" value="{{ $appointmentId }}">
             <tr>
               <td scope="row">1</td>
               <td> <input type="checkbox" name="time[]"  value="6am" style="margin-right:4px;" @if (isset($times))
                 {{$times->contains('time','6am')?'checked':''}}
               @endif>6am</td>
               <td><input type="checkbox" name="time[]"  value="6.20am" style="margin-right:4px;" @if (isset($times))
                 {{$times->contains('time','6am')?'checked':''}}
               @endif>6.20am</td>
               <td><input type="checkbox" name="time[]"  value="6.40am" style="margin-right:4px;"
                 @if (isset($times))
                   {{$times->contains('time','6am')?'checked':''}}
                 @endif>6.40am</td>
             </tr>

             <tr>
               <td scope="row">2</td>
               <td> <input type="checkbox" name="time[]"  value="7am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7am')?'checked':''}}
               @endif>7am</td>
               <td><input type="checkbox" name="time[]"  value="7.20am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7.20am')?'checked':''}}
               @endif>7.20am</td>
               <td><input type="checkbox" name="time[]"  value="7.40am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7.40am')?'checked':''}}
               @endif>7.40am</td>
             </tr>

             <tr>
               <td scope="row">3</td>
               <td> <input type="checkbox" name="time[]"  value="8am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8am')?'checked':''}}
               @endif>8am</td>
               <td><input type="checkbox" name="time[]"  value="8.20am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8.20am')?'checked':''}}
               @endif>8.20am</td>
               <td><input type="checkbox" name="time[]"  value="8.40am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8.40am')?'checked':''}}
               @endif>8.40am</td>
             </tr>

             <tr>
               <td scope="row">4</td>
               <td> <input type="checkbox" name="time[]"  value="9am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9am')?'checked':''}}
               @endif>9am</td>
               <td><input type="checkbox" name="time[]"  value="9.20am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9.20am')?'checked':''}}
               @endif>9.20am</td>
               <td><input type="checkbox" name="time[]"  value="9.40am" style="margin-right:4px;" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9.40am')?'checked':''}}
               @endif>9.40am</td>
             </tr>

             <tr>
               <td scope="row">5</td>
               <td> <input type="checkbox" name="time[]"  value="10am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','10am')?'checked':''}}
               @endif>10am</td>
               <td><input type="checkbox" name="time[]"  value="10.20am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','10.20am')?'checked':''}}
               @endif>10.20am</td>
               <td><input type="checkbox" name="time[]"  value="10.40am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','10.40am')?'checked':''}}
               @endif>10.40am</td>
             </tr>

             <tr>
               <td scope="row">6</td>
               <td> <input type="checkbox" name="time[]"  value="11am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','11am')?'checked':''}}
               @endif>11am</td>
               <td><input type="checkbox" name="time[]"  value="11.20am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','11.20am')?'checked':''}}
               @endif>11.20am</td>
               <td><input type="checkbox" name="time[]"  value="11.40am" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','11.40am')?'checked':''}}
               @endif>11.40am</td>
             </tr>

           </tbody>
          </table>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        Choose PM Time
      </div>
      <div class="card-body">
        <table class="table table-striped">

           <tbody>
             <tr>
               <td scope="row">6</td>
               <td> <input type="checkbox" name="time[]"  value="12pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','12pm')?'checked':''}}
               @endif>12pm</td>
               <td><input type="checkbox" name="time[]"  value="12.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','12.20pm')?'checked':''}}
               @endif>12.20pm</td>
               <td><input type="checkbox" name="time[]"  value="12.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','12.40pm')?'checked':''}}
               @endif>12.40pm</td>
             </tr>

             <tr>
               <td scope="row">7</td>
               <td> <input type="checkbox" name="time[]"  value="1pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','1pm')?'checked':''}}
               @endif>1pm</td>
               <td><input type="checkbox" name="time[]"  value="1.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','1.20pm')?'checked':''}}
               @endif>1.20pm</td>
               <td><input type="checkbox" name="time[]"  value="1.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','1.40pm')?'checked':''}}

               @endif>1.40pm</td>
             </tr>

             <tr>
               <td scope="row">8</td>
               <td> <input type="checkbox" name="time[]"  value="2pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','2pm')?'checked':''}}
               @endif>2pm</td>
               <td><input type="checkbox" name="time[]"  value="2.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','2.20pm')?'checked':''}}
               @endif>2.20pm</td>
               <td><input type="checkbox" name="time[]"  value="2.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','2.40pm')?'checked':''}}
               @endif>2.40pm</td>
             </tr>

             <tr>
               <td scope="row">9</td>
               <td> <input type="checkbox" name="time[]"  value="3pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','3pm')?'checked':''}}
               @endif>3pm</td>
               <td><input type="checkbox" name="time[]"  value="3.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','3.20pm')?'checked':''}}
               @endif>3.20pm</td>
               <td><input type="checkbox" name="time[]"  value="3.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','3.40pm')?'checked':''}}
               @endif>3.40pm</td>
             </tr>

             <tr>
               <td scope="row">10</td>
               <td> <input type="checkbox" name="time[]"  value="4pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','4pm')?'checked':''}}
               @endif>4pm</td>
               <td><input type="checkbox" name="time[]"  value="4.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','4.20pm')?'checked':''}}
               @endif>4.20pm</td>
               <td><input type="checkbox" name="time[]"  value="4.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','4.40pm')?'checked':''}}
               @endif>4.40pm</td>
             </tr>

             <tr>
               <td scope="row">11</td>
               <td> <input type="checkbox" name="time[]"  value="5pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','5pm')?'checked':''}}
               @endif>5pm</td>
               <td><input type="checkbox" name="time[]"  value="5.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','5.20pm')?'checked':''}}
               @endif>5.20pm</td>
               <td><input type="checkbox" name="time[]"  value="5.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','5.40pm')?'checked':''}}
               @endif>5.40pm</td>
             </tr>

             <tr>
               <td scope="row">12</td>
               <td> <input type="checkbox" name="time[]"  value="6pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','6pm')?'checked':''}}
               @endif>6pm</td>
               <td><input type="checkbox" name="time[]"  value="6.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','6.20pm')?'checked':''}}
               @endif>6.20pm</td>
               <td><input type="checkbox" name="time[]"  value="6.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','6.40pm')?'checked':''}}
               @endif>6.40pm</td>
             </tr>

             <tr>
               <td scope="row">13</td>
               <td> <input type="checkbox" name="time[]"  value="7pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7pm')?'checked':''}}
               @endif>7pm</td>
               <td><input type="checkbox" name="time[]"  value="7.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7.20pm')?'checked':''}}
               @endif>7.20pm</td>
               <td><input type="checkbox" name="time[]"  value="7.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','7.40pm')?'checked':''}}
               @endif>7.40pm</td>
             </tr>

             <tr>
               <td scope="row">14</td>
               <td> <input type="checkbox" name="time[]"  value="8pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8pm')?'checked':''}}
               @endif>8pm</td>
               <td><input type="checkbox" name="time[]"  value="8.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8.20pm')?'checked':''}}
               @endif>8.20pm</td>
               <td><input type="checkbox" name="time[]"  value="8.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','8.40pm')?'checked':''}}
               @endif>8.40pm</td>
             </tr>

             <tr>
               <td scope="row">15</td>
               <td> <input type="checkbox" name="time[]"  value="9pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9pm')?'checked':''}}
               @endif>9pm</td>
               <td><input type="checkbox" name="time[]"  value="9.20pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9.20pm')?'checked':''}}
               @endif>9.20pm</td>
               <td><input type="checkbox" name="time[]"  value="9.40pm" style="margin-right:4px;"@if (isset($times))
                 {{$times->contains('time','9.40pm')?'checked':''}}
               @endif>9.40pm</td>
             </tr>


           </tbody>
          </table>
      </div>
    </div>
     <div class="card">
       <div class="card-body">
         <button type="submit"class="btn btn-primary">Submit</button>
       </div>

     </div>


</div>
</form>
@else
  <h3>Your Appointment Time list: {{ $myappointments->count() }}</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col"># @php
        $i = 0;
      @endphp</th>
      <th scope="col">Creator</th>
      <th scope="col">Date</th>
      <th scope="col">View/Update</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($myappointments as $appointment)

    <tr>
      <th scope="row">{{ $i = $i+1 }}</th>
      <td>{{ $appointment->doctor->name }}</td>
      <td>{{ $appointment->date }}</td>
      <td>

        <form action="{{ route('appointment.check') }}" method="post">
          @csrf
          <input type="hidden" name="date" value="{{ $appointment->date }}">
          <button type="submit" class="btn btn-primary">View/Update</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    @endif

  <style type="text/css">
      input[type="checkbox"]{
        zoom:1.5;
      }
      body{
        font-size: 20px;
      }

  </style>

@endsection
