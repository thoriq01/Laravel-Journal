<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alamat;
use App\Models\Rekening;

class Customer extends Model
{
    use HasFactory;
 
    protected $table = 'customer';
    protected $fillable = 
    [
        'namaCustomer',
        'telponCustomer',
        'emailCustomer',
        'fotoCustomer'
    ];
    public $timestamps = false;
    public function alamatRelation()
    {
        return $this->hasMany(Alamat::class,'customer_id'); 
    }
    public function RekeningRelation()
    {
        return $this->hasMany(Rekening::class,'customer_id');
    }
}
