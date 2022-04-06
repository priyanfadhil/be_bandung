<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryWisata extends Model
{
    use HasFactory;

    protected $table = 'galleries_wisata';
    protected $fillable = [
        'id_wisata', 'image'
    ];
}
