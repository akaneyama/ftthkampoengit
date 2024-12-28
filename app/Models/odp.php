<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class odp extends Model
{
    use HasFactory;
    protected $table = 'odp'; 
    protected $primaryKey = 'id_odp'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'nama_odp',
        'alamat_odp',
    ];
}
