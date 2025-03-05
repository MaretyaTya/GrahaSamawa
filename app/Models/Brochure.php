<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    use HasFactory;
    protected $table = 'brochure';
    protected $fillable = ['file_path', 'download_count', "is_active"];
}
