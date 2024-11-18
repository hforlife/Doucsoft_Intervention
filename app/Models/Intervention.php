<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Intervention extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'intervention_type',
        'factory',
        'time',
        'agent',
        'data',
    ];

    
}
