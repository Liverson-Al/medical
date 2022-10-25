<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function PlaceOfWork()
    {
        return $this->belongsTo(PlaceOfWork::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function VisitData()
    {
        return $this->hasMany(VisitData::class);
    }
}
