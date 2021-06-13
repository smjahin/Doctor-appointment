<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','FrontendController@index');

Route::get('/dashboard','DashboardController@index');

Route::group(['middleware'=>['auth','patient']],function(){
      //profile route
      Route::post('/profile-pic','ProfileController@profilePic')->name('profile.pic');
      Route::get('/user-profile','ProfileController@index');
      Route::post('/user-profile','ProfileController@store')->name('profile.store');
      Route::post('/book/appointment','FrontendController@store')->name('booking.appointment');
      //show my booking
      Route::get('my-booking','FrontendController@myBooking')->name('my.booking');
      Route::get('my-prescription','FrontendController@myprescription')->name('my.prescription');
});

Route::get('/new-appointment/{doctorId}/{date}','FrontendController@show')->name('create.appointment');

Route::group(['middleware'=>['auth','admin']],function(){

Route::resource('doctor','DoctorController');
Route::get('/patients','patientlistController@index')->name('patient');
Route::get('/patients-all','patientlistController@allTimeAppointment')->name('all.appointments');
Route::get('/status/update/{id}','patientlistController@toggleStatus')->name('update.status');
Route::get('doctor/showw/{id}','DoctorController@showw')->name('doctor.showw');
Route::resource('department','DepartmentController');


});

//Doctor

Route::group(['middleware'=>['auth','doctor']],function(){

Route::resource('appointment','AppointmentController');
Route::post('/appointment/check','AppointmentController@check')->name('appointment.check');
Route::post('/appointment/update','AppointmentController@updateTime')->name('update');
Route::get('patient-today','PrescriptionController@index')->name('patient.today');
Route::post('/prescription','PrescriptionController@store')->name('prescription');
Route::get('/prescription/{userId}/{date}','PrescriptionController@show')->name('prescription.show');

Route::get('/prescribed-patients','PrescriptionController@patientsFromPrescription')->name('prescribed.patient');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
