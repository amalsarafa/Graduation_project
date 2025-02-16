<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 
        'doctor_id', 
        'rating', 
        'comment'
    ];
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
