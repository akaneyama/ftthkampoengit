<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odc extends Model
{
    use HasFactory;
    protected $table = 'odc'; 
    protected $primaryKey = 'id_odc'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'nama_odc',
        'port_odc',
    ];
}
