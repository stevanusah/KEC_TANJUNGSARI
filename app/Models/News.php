<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'beritas';
    protected $fillable = [
        'berita_image',
        'description',
        'jenis_berita_id',
        'judul_berita',
        'views'
    ];

    public function jenis_berita()
    {
        return $this->hasOne(JenisBerita::class, 'id', 'id');
    }
}
