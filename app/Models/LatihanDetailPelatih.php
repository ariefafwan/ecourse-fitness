<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HashUuid;

class LatihanDetailPelatih extends Model
{
    use HasFactory;
    use HashUuid;
    protected $table = 'latihan_detail_pelatih';
    protected $primaryKey = 'id';

    public function dataLatihanPelatih()
    {
        return $this->belongsTo(LatihanPelatih::class, 'id_latihan_pelatih', 'id');
    }
}
