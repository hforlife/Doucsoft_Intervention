<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'etudiant_id',
        'issued_at',
        'certificate_url',
    ];
}