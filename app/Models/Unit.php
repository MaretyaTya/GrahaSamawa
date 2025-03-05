<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Unit extends Model
{
    use HasFactory;

    // tabel from database
    protected $table = 'units';

    protected $fillable = [
        'nama_unit',
        'harga',
        'kamar_tidur',
        'kamar_mandi',
        'carport',
        'luas_tanah',
        'luas_bangunan',
        'spesifikasi',
        'kode_unit',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($unit) {
    //         if (Schema::hasTable('units')) {
    //             $unit->kode_unit = 'UNIT-' . str_pad(Unit::count() + 1, 3, '0', STR_PAD_LEFT);
    //         }
    //     });
    // }

    // Relasi ke tabel images
    public function images()
    {
        return $this->hasMany(Image::class, 'unit_id');
    }
}
