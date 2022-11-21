<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echocardiography extends Model
{
    use HasFactory;

    public function PatientInfo()
    {
        return $this->belongsToMany(PatientInfo::class);
    }

    public function VisitData()
    {
        return $this->belongsTo(VisitData::class);
    }
}
