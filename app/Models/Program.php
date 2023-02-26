<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }

    public function aspek()
    {
        return $this->belongsTo(Aspek::class);
    }

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class);
    }
    
}
