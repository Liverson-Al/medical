<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    use HasFactory;
    protected $guarded = false;

//    private function calculate_age($birthday) {
//        $birthday_timestamp = strtotime($birthday);
//        $age = date('Y') - date('Y', $birthday_timestamp);
//        if (date('md', $birthday_timestamp) > date('md')) {
//            $age--;
//        }
//        return $age;
//    }

}
