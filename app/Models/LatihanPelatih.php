<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;

class LatihanPelatih extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'latihan_pelatih';
    protected $primaryKey = 'id';

    public function dataDetailLatihanPelatih()
    {
        return $this->hasMany(LatihanDetailPelatih::class, 'id_latihan_pelatih', 'id');
    }

    public function dataPelatih()
    {
        return $this->belongsTo(Pelatih::class, 'id_pelatih', 'id');
    }
}
