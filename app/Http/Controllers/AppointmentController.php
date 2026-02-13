<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        Appointment::create([
            'patient_name' => $request->input('patient-name'),
            'phone' => $request->phone,
            'dob' => $request->dob,
            'appointment_date' => $request->input('appoinment-date'),
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success_message', 'تم استلام طلب حجزك بنجاح! سنتواصل معك قريباً لتأكيد الموعد.');
    }

    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('appointments.index', compact('appointments'));
    }

    public function destroy($id)
    {
        Appointment::findOrFail($id)->delete();
        return back()->with('success', 'تم حذف الحجز');
    }
}
