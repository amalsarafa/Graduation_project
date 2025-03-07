<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PatientService extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'patient_id',
        'service_id',
    ];

    // العلاقة مع مريض
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // العلاقة مع خدمة
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
