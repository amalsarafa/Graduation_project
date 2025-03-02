<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PatientReservation extends Model
{
    use HasFactory;
    protected $table = 'patient_reservations';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'date',
        'time',
        'service',
        'status',
    ];
     public function patient()
     {
         return $this->belongsTo(Patient::class);
     }

     public function doctor()
     {
         return $this->belongsTo(Doctor::class);
     }
}
