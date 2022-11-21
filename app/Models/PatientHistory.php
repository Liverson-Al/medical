<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientHistory extends Model
{
    use HasFactory;

    public function PatientInfo()
    {
        return $this->belongsTo(PatientInfo::class);
    }

//    public function user()
//    {
//        return $this->belongsToMany(User::class);
//    }
}
