<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukLayanan extends Model
{
    use HasFactory;
    protected $table = 'produk_layanans';
    protected $fillable = [
        'janji_layanan',
        'maklumat_layanan',
        'misi_layanan',
        'motto_layanan',
        'visi_layanan',
        'is_active'
    ];
}
