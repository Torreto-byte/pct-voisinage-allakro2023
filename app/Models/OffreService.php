<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreService extends Model
{
    use HasFactory;

    protected $fillable = [
        'noms',
        'service',
        'qualifications',
        'contact',
        'photo',
        'message',
    ];
}
