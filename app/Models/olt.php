<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class olt extends Model
{
    use HasFactory;
    protected $table = 'olt'; 
    protected $primaryKey = 'id_olt'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'nama_olt',
        'pon_olt',
    ];
}
