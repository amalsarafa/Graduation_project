<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';   

    protected $fillable = [
        'title',
        'description',
        'due_date',
        
        
    ];

    protected $casts = [
        'due_date' => 'datetime', 
    ];

    
    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
    public $timestamps = true;

}
