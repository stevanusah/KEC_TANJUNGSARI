<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaianskpd extends Model
{
    use HasFactory;
    protected $table = 'capaian_skpds';
    protected $fillable = [
        'tahun_anggaran',
        'nilai_sakip',
        'jumlah_pegawai',
        'indikator_utama',
        'target',
        'file_hasilcapaian',
        'foto_kepala_dinas',
        'is_active',
        'user_id'
    ];
}
