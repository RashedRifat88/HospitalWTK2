<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addDoctorView()
    {
        return view('admin.add_doctor');
    }



    public function uploadDoctor(Request $request)
    {
        $doctor = new Doctor();

        $image = $request->file;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctor_image', $imageName);
        $doctor->image = $imageName;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added successfully');
    }



    public function showAppointments()
    {

        $data = Appointment::all();

        return view('admin.show_appointment', compact('data'));
    }


    public function approveAppointment($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();

        return redirect()->back();
    }

    public function cancelAppointment_a($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();

        return redirect()->back();
    }



}
