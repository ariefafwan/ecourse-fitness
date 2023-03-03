<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    public function aspek()
    {
        return $this->belongsTo(Aspek::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->hasMany(Program::class);
    }

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class);
    }
}
