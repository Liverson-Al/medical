<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcomDisease extends Model
{
    use HasFactory;
    protected $guarded = False;

//    public function user(){
//        return $this->belongsToMany(User::class);
//    }

    public function PatientInfo(){
        return $this->belongsTo(PatientInfo::class);
    }

}
