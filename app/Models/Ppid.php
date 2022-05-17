<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppid extends Model
{
    use HasFactory;
    protected $table = 'ppids';
    protected $fillable = [
        'tugas_ppid',
        'fungsi_ppid',
        'visi_ppid',
        'misi_ppid',
        'struktur_organisasi_ppid_image',
        'maklumat_ppid',
        'is_active',
        'user_id'
    ];
}
