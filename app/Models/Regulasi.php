<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    use HasFactory;
    protected $table = 'regulasis';
    protected $fillable = [
        'is_active',
        'jenis_regulasi',
        'nama_regulasi',
        'regulasi_file',
        'user_id',
        'created_at'
    ];
}
