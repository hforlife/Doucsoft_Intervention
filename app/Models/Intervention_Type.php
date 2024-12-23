<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention_Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function domaines()
    {
        return $this->hasMany(Domaine::class, 'intervention__type_id');
    }
}
