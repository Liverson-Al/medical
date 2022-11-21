<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitData extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function patientinfo()
    {
        return $this->belongsTo(Patientinfo::class);
    }

    public function ClinicalData()
    {
        return $this->hasMany(ClinicalData::class);
    }

    public function Echocardiography()
    {
        return $this->hasMany(Echocardiography::class);
    }

    public function MSQCAngiographyAorta()
    {
        return $this->hasMany(MSQCAngiographyAorta::class);
    }
}
