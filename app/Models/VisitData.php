<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitData extends Model
{
    use HasFactory;

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function patientinfo(){
        return $this->belongsTo(patientinfo::class);
    }
}
