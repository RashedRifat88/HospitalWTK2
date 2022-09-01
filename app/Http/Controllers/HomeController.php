<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {

            if (Auth::user()->user_type == '0') {

                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
            } else {

                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            return view('user.home', compact('doctors'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = "In Progress";

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Successful. We will contact with you soon.');
    }

    public function myAppointment()
    {
        
        return view('user.my_appointment');
    }



}
