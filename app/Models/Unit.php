<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Unit extends Model
{
    use HasFactory;

    // tabel from database
    protected $table = 'units';

    protected $fillable = [
        'nama_unit',
        'kamar_tidur',
        'kamar_mandi',
        'carport',
        'luas_tanah',
        'luas_bangunan',
        'spesifikasi',
    ];

    // Relasi ke tabel images
    public function images()
    {
        return $this->hasMany(Image::class, 'unit_id');
    }
}
