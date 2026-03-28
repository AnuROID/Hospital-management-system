<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable=[
        'name',
        'specialization',
        'start_time',
        'end_time',
        'max_patients'
    ];
    public  function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
