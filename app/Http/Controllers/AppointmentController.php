<?php

namespace App\Http\Controllers;

use App;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $query=Appointment::with('doctor');
        if($request->doctor_id){
            $query->with('doctor_id',$request->doctor_id);

        }
        if($request->date){
            $query->whereDate('date',$request->date);
        }
        $appointments=$query->get();
        return view('appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctors=Doctor::all();
        return view('appointments.create',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $doctor=Doctor::find($request->doctor_id);
        $count=Appointment::where('doctor_id',$doctor->id)
        ->whereDate('date',$request->date)
        ->count();
        if($count>=$doctor->max_patients){
            return back()->with('error','Doctor full for the day');

        }
        Appointment::create($request->all());
        return back()->with('success','Appointment added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateStatus($id){
        $appointment=Appointment::findOrFail($id);
        $appointment->update([
            'status'=>'completed'
        ]);
        return back()->with('success','appointment status updated');
    }
    public function complete($id){
        $appointment=Appointment::findOrFail($id);
        $appointment->update([
            'status'=>'complete'
        ]);
        return view('/appointments');
    }
}
