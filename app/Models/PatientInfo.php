<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function Anthropometry()
    {
        return $this->hasMany(Anthropometry::class);
    }

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


//    private function calculate_age($birthday) {
//        $birthday_timestamp = strtotime($birthday);
//        $age = date('Y') - date('Y', $birthday_timestamp);
//        if (date('md', $birthday_timestamp) > date('md')) {
//            $age--;
//        }
//        return $age;
//    }

}
