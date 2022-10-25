<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceOfWork extends Model
{
    use HasFactory;

    public function doctor(){
        return $this->hasMany(doctor::class);
    }
}
