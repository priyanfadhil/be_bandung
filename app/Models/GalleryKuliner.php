<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryKuliner extends Model
{
    use HasFactory;
    
    protected $table = 'galleries_kuliner';
    protected $fillable = [
        'id_kuliner', 'image'
    ];
}
