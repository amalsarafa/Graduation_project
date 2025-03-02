<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Doctor extends Model
{
     use HasFactory;
     
    protected $fillable = [
        'id',
        'user_id',  
        'gender',
        'license_number',
        'specialization',
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
    return $this->belongsTo(User::class);  // الطبيب ينتمي إلى مستخدم واحد
}

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function reservations()
    {
        return $this->hasMany(PatientReservation::class);
    }

    public function uniquePatients()
    {
        return $this->reservations()->distinct('patient_id')->count();
    }
}
