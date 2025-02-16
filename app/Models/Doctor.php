<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Doctor extends Model
{
     use HasFactory;
     
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'birth_date',
        'gender',
        'phone',
        'address',
        'country',
        'profile_image',
        'specialization',
        'license_number',
        'academic_qualifications', 
        'years_experience',        
        'training_courses', 
        'professional_certificate',       
    ];
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
