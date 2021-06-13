@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Appointments
                  ({{ $bookings->count() }})
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
                        </tr>
                      </thead>
                      @forelse ($bookings as $key=>$booking)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>
                            <img src="/profile/{{ $booking->user->image }}" width="80" class="table-user-thumb" >
                          </td>
                          <td> {{ $booking->user->phone_number }}</td>
                          <td> {{ $booking->user->email }}</td>
                          <td> {{ $booking->date }}</td>
                          <td> {{ $booking->user->name }} </td>
                          <td> {{ $booking->time }} </td>
                          <td> {{ $booking->doctor->name }} </td>
                          <td>
                            @if ($booking->status == 0)
                              <a href="{{ route('update.status', [$booking->id])}}">
                                 <button class="btn btn-primary"> Pending</button></a>
                            @else
                              <a href="{{ route('update.status', [$booking->id])}}">
                                <button class="btn btn-success"> Checked </button></a>
                            @endif
                          </td>

                        </tr>
                      @empty
                      <td>There is no appointments for today!</td>
                      @endforelse
                      </tbody>
                    </table>
                      
                </div>

                {{ $bookings->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
