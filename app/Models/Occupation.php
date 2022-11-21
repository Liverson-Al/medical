<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function user(){
        return $this->hasMany(User::class);
    }
}
