<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;

    protected $table = 'detail_servis_layanans';
    protected $fillable = [
        'alur_prosedur_image',
        'biaya',
        'dasar_hukum',
        'evaluasi_kinerja',
        'fasilitas',
        'is_active',
        'jamainan_keamanan_keselamatan',
        'jaminan_pelayanan',
        'jumlah_pelaksana',
        'kompetensi_pelaksana',
        'nama_layanan',
        'pengawasan_internal',
        'pengelola_pengaduan',
        'persyaratan',
        'produk_pelayanan',
        'user_id',
        'waktu_pelayanan'

    ];
}
