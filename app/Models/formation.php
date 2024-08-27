<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'user_id',
        'image',
    ];
    public function formateur()
    {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' est la clé étrangère dans la table formations
    }
}