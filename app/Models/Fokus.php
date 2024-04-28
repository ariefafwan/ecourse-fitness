<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;

class Permintaan extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'fokus';
    protected $primaryKey = 'id';

    public function dataUser()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
