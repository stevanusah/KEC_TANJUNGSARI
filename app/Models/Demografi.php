<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografi extends Model
{
    use HasFactory;
    protected $table = 'demografis';
    protected $fillable = [
        'tahun_anggaran',
        'luas_wilayah',
        'jumlah_desa',
        'jumlah_penduduk',
        'jumlah_layanan',
        'is_active',
        'user_id'
    ];
}
