<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;


class ProgramLatihan extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'program_latihan';
    protected $primaryKey = 'id';

    public function dataUser()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function dataLatihanPelatih()
    {
        return $this->belongsTo(LatihanPelatih::class, 'id_latihan_pelatih', 'id');
    }

    public function dataPelatih()
    {
        return $this->belongsTo(Pelatih::class, 'id_pelatih', 'id');
    }
}
