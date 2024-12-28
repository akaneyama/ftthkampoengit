<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiFatClient extends Model
{
    use HasFactory;

    protected $table = 'transaksi_fat';
    protected $primaryKey = 'id_trans_fat';
    protected $fillable = ['id_user_ftth', 'id_olt', 'id_odc', 'id_fat', 'id_odp', 'warna_kabel'];

    public function userFtth()
    {
        return $this->belongsTo(userftth::class, 'id_user_ftth', 'id_user_ftth');
    }

    public function olt()
    {
        return $this->belongsTo(olt::class, 'id_olt');
    }

    public function odc()
    {
        return $this->belongsTo(odc::class, 'id_odc');
    }

    public function fat()
    {
        return $this->belongsTo(fat::class, 'id_fat');
    }

    public function odp()
    {
        return $this->belongsTo(odp::class, 'id_odp');
    }
}
