<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anthropometry extends Model
{
    use HasFactory;
//    public function user(){
//        return $this->belongsToMany(User::class);
//    }

    public function PatientInfo(){
        return $this->belongsTo(Patientinfo::class);
    }
}
