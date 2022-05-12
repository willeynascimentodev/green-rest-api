<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residuo extends Model
{

    protected $fillable = [
        'name',
        'residue_type',
        'category',
        'treatment_tec',
        'class',
        'measurement'
    ];

    use HasFactory;
}
