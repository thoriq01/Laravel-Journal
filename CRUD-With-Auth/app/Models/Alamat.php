<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;
    protected $table= 'alamat';
    protected $fillable = 
    [ 
        'jalan',
        'rt',
        'rw',
        'kota',
        'provinsi',
        'customer_id',
    ];
    public $timestamps = null;
    
}
