<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total=Doctor::count();
        $totalAppointments=Appointment::whereDate('created_at',today())->count();
        $pending=Appointment::where('status','pending')->count();
        $completed=Appointment::where('status','completed')->count();
        return view('dashboard.index', compact(
            'total',
            'totalAppointments',
            'pending',
            'completed'
        ));
    }
}
