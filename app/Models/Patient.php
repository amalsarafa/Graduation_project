<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
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
        'id_number',
        'country',
        'profile_image',
        'chronic_diseases_history',
        'previous_reports',       
        'previous_report_file',   
    ];
    public function services()
    {
        return $this->belongsToMany(Service::class, 'patient_services');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function reservations()
    {
        return $this->hasMany(PatientReservation::class);
    }
public function medicalReports()
{
    return $this->hasMany(MedicalReport::class);
}

}
