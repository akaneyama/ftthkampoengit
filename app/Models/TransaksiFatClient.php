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
        return $this->belongsTo(UserFtth::class, 'id_user_ftth', 'id_user_ftth');
    }

    public function olt()
    {
        return $this->belongsTo(Olt::class, 'id_olt');
    }

    public function odc()
    {
        return $this->belongsTo(Odc::class, 'id_odc');
    }

    public function fat()
    {
        return $this->belongsTo(Fat::class, 'id_fat');
    }

    public function odp()
    {
        return $this->belongsTo(Odp::class, 'id_odp');
    }
}
