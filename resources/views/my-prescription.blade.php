@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">My Prescription</div>

                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Symptoms</th>
                        <th scope="col">Medicine</th>
                        <th scope="col">procedure_to_use_medicine</th>
                        <th scope="col">Doctor feedback</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($prescriptions as $key => $prescription)
                      <tr>
                        <td>{{$prescription->date}}</td>
                        <td>{{$prescription->doctor->name}}</td>
                        <td>{{$prescription->name_of_disease}}</td>
                        <td>{{$prescription->symptoms}}</td>
                        <td>{{$prescription->medicine}}</td>
                        <td>{{$prescription->procedure_to_use_medicine}}</td>
                        <td>{{$prescription->feedback}}/td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
