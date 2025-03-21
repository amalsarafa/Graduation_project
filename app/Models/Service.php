<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',                   
        'description',          
        'price',     
        'medical_specialization',
        'status', 
        'doctor_id',             
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $attributes = [
        'status' => 'pending', 
    ];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_service');
    }
    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
