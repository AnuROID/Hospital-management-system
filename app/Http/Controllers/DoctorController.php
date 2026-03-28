<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index()
    {
        //get all the list of doctors
        //:: scope resolution operator
        //access something inside the class
        $doctors=Doctor::all();
        return view('doctors.index',compact('doctors'));
        //compact works is  ['doctor'=>$doctor]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required',
        'specialization'=>'required',
        'start_time'=>'required',
        'end_time'=>'required',
        'max_patients'=>'required|integer',

       ]);
       Doctor::create($request->all());

        return redirect()->back()->with('success','doctor added');
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
    public function edit($id)
    {
        //
        $doctor=Doctor::findOrFail($id);
        return view('doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'specialization'=>'required',
            'max_patients'=>'required|integer'
        ]);
        $doctor=Doctor::findOrFail($id);
        $doctor->update($request->all());
        return redirect()->back()->with('success','doctor updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Doctor::destroy($id);
        return redirect()->back();
    }
}
