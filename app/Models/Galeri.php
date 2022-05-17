<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeris';
    protected $fillable = [
        'description',
        'is_active',
        'created_at',
        'user_id',
        'vidio_link'
    ];
}
