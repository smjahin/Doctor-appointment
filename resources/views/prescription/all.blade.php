@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                  Appointments
                  ({{ $patients->count() }})
                </div>

                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone Number</th>
                          <th scope="col">Date</th>
                          <th scope="col">User</th>
                          <th scope="col">Time</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Status</th>
                          <th scope="col">Prescription</th>
                        </tr>
                      </thead>
                      @forelse ($patients as $key=>$patient)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>
                            <img src="/profile/{{ $patient->user->image }}" width="80" class="table-user-thumb" >
                          </td>

                          <td> {{ $patient->user->phone_number }}</td>
                          <td> {{ $patient->user->email }}</td>
                          <td> {{ $patient->date }}</td>
                          <td> {{ $patient->user->name }} </td>
                          <td> {{ $patient->time }} </td>
                          <td> {{ $patient->doctor->name }} </td>
                          <td>
                            @if ($patient->status ==1 )
                              checked
                            @endif
                          </td>
                          <td>
                            <!-- Button trigger modal -->
                          
                            <a href="{{ route('prescription.show',[$patient->user_id,$patient->date])}}" class="btn btn-secondary">
                              View prescription
                            </a>

                          </td>
                        </tr>
                      @empty
                      <td>There is no appointments for today!</td>
                      @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
