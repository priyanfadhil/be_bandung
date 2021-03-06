<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'address', 'time',
        'phone', 'background', 'facility'
    ];

    public function UserWisata()
    {
        return $this->hasMany(UserWisata::class);
    }
}
