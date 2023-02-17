<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function kind()
    {
        return $this->belongsTo(kind::class);
    }
    
}
