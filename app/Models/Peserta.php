<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_seri',
        'tahun',
        'nama',
        'instansi',
        'email',
        'no_wa',
        'jenis_pelatihan',
        'link',
    ];
}
