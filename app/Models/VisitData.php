<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitData extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function patientinfo(){
        return $this->belongsTo(Patientinfo::class);
    }
}
