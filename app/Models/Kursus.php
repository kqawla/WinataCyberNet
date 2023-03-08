<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $fillable = [
        'email',
        'nama',
        'profesi',
        'alamatusaha',
        'alamattinggal',
        'notelp',
        'kursus',
    ];
}
