<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;

class Pelatih extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'pelatih';
    protected $primaryKey = 'id';

    public function dataUser()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function dataPermintaan()
    {
        return $this->hasMany(Permintaan::class, 'id_pelatih', 'id');
    }

    public function latihan_pelatih()
    {
        return $this->hasMany(LatihanPelatih::class, 'id_pelatih', 'id');
    }

    public function program_latihan()
    {
        return $this->hasMany(ProgramLatihan::class, 'id_pelatih', 'id');
    }
}
