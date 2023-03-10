<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->hasMany(Program::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pelatih()
    {
        return $this->belongsTo(Pelatih::class);
    }
}
