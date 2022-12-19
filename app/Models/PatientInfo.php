<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientInfo extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = false;

//    public function Anthropometry()
//    {
//        return $this->hasMany(Anthropometry::class);
//    }

    public function ConcomDisease()
    {
        return $this->hasMany(ConcomDisease::class);
    }

    public function PatientHistory()
    {
        return $this->hasMany(PatientHistory::class);
    }

    public function ClinicalData()
    {
        return $this->hasMany(ClinicalData::class);
    }

    public function MSQCAngiographyAorta()
    {
        return $this->hasMany(MSQCAngiographyAorta::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }


}
