<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userftth extends Model
{
    use HasFactory;

    protected $table = 'userftth';
    protected $primaryKey = 'id_user_ftth';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'nama_user_ftth',
        'alamat_user_ftth',
        'nomor_telp',
        'ip_address',
    ];

    public function transaksiUsers()
    {
        return $this->hasMany(TransaksiFatClient::class, 'id_user_ftth', 'id_user_ftth');
    }
}
