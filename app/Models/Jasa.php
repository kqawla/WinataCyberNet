<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $fillable = [
        'mail',
        'nm',
        'prof',
        'usaha',
        'tinggal',
        'wa',
        'konten',
        'optimasi',
        'paket',
    ];
}
