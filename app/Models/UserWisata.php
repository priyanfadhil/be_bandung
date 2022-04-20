<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'wisata_id'
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function Wisata()
    {
        return $this->hasOne(Wisata::class, 'id', 'wisata_id');
    }
}
