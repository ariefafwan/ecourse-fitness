<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);   
    }

    public function permintaan()
    {
        return $this->hasMany(Permintaan::class);
    }

    public function kind()
    {
        return $this->hasMany(Kind::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }
}
