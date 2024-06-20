<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;

class Permintaan extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'permintaan';
    protected $primaryKey = 'id';

    public function dataUser()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function dataPelatih()
    {
        return $this->belongsTo(Pelatih::class, 'id_pelatih', 'id');
    }

    public function dataProgramLatihan()
    {
        return $this->hasMany(ProgramLatihan::class, 'id_permintaan', 'id');
    }
}
