<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'Name',
        'Surname',
        'Patronymic',
        'BirthDate',
        'Sex',
        'ClinicID',
        'RoleID',
        'OccupationID',
        'WorkExperience',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function VisitData()
    {
        return $this->hasMany(VisitData::class);
    }

//    public function ConcomDisease()
//    {
//        return $this->hasMany(ConcomDisease::class);
//    }

//    public function PatientHistory()
//    {
//        return $this->hasMany(PatientHistory::class);
//    }

//    public function Anthropometry()
//    {
//        return $this->hasMany(Anthropometry::class);
//    }

//    public function ClinicalData()
//    {
//        return $this->hasMany(ClinicalData::class);
//    }

//    public function MSQCAngiographyAorta()
//    {
//        return $this->hasMany(MSQCAngiographyAorta::class);
//    }

}
