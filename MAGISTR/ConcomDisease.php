<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcomDisease extends Model
{
    use HasFactory;
    protected $guarded = False;

    public function employee(){
        return $this->belongsToMany(Employee::class);
    }

    public function patientinfo(){
        return $this->belongsTo(Patientinfo::class);
    }

}
