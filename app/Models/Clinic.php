<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function PatientInfo()
    {
        return $this->hasMany(PatientInfo::class);
    }
}
