<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'intervention_type_id',
    ];

    public function intervention_type()
    {
        return $this->belongsTo(Intervention_Type::class, 'intervention_type_id');
    }
}
