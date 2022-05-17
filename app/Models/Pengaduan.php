<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'layanan_aduans';
    protected $fillable = [
        'nama',
        'email',
        'no_handphone',
        'kritik_saran',
        'is_active',
        'keterangan',
        'user_id'
    ];
}
