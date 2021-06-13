<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Prescription;
class PrescriptionController extends Controller
{
  public function index()
  {
    date_default_timezone_set('asia/dhaka');
    $bookings = Booking::where('date',date('Y-m-d'))
               ->where('status',1)
               ->where('doctor_id',auth()->user()->id)
               ->get();
    return view('prescription.index',compact('bookings'));
  }
  public function store(Request $request)
  {
    $data = $request->all();
    $data['medicine'] = implode(',',$request->medicine);
    Prescription::create($data);
    return redirect()->back()->with('message','Prescrption created');
  }

  public function show($userdId,$date)
  {
    $prescription = Prescription::where('user_id',$userdId)
                    ->where('date',$date)->first();
    return view('prescription.show',compact('prescription'));
  }
//get all patients from prescription table
  public function patientsFromPrescription()
  {
    $patients= Prescription::get();
    return view('prescription.all',compact('patients'));
  }

  
}
