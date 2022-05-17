<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumens';
    protected $fillable = [
        'nama_dokumen',
        'dokumen_file',
        'jenis_dokumen',
        'is_active',
        'user_id'
    ];
}
