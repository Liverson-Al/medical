<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function WorkPlaceID()
    {
        return $this->belongsTo(WorkPlaceID::class);
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
