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
        'domaines_id',
        'factory_id',
        'time',
        'agent_id',
        'data',
    ];

    public function domaines()
    {
        return $this->belongsTo(Domaine::class, 'domaines_id');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id');
    }
}
