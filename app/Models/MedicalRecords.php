<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecords extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'xRay',
        'ultrasoundScan',
        'ctScan',
        'mri',
    ];
}
