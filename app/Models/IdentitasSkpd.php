<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasSkpd extends Model
{
    use HasFactory;
    protected $table = 'identitas_skpds';
    protected $fillable = [
        'alamat',
        'email',
        'fax',
        'latitude',
        'longitude',
        'nama_skpd',
        'singkatan_nama_skpd',
        'telepon',
        'website'
    ];
}
