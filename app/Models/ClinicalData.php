<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalData extends Model
{
    use HasFactory;

//    public function user(){
//        return $this->belongsToMany(User::class);
//    }
//
//    public function VisitData()
//    {
//        return $this->belongsTo(VisitData::class);
//    }

    public function PatientInfo(){
        return $this->belongsTo(PatientInfo::class);
    }
}
