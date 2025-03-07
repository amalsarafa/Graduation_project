<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MedicalReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_name', 
        'report_date', 
        'report_type', 
        'patient_id', 
        'doctor_id',
        'file_path',
        
    ];
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
