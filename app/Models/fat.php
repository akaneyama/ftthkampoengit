<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fat extends Model
{
    use HasFactory;
    protected $table = 'fat'; 
    protected $primaryKey = 'id_fat'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'nama_fat',
        'alamat_fat',
    ];
}
