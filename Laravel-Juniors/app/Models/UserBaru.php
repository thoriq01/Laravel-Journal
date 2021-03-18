<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserBaru extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    
    
    protected $fillable = [
        'username',
        'password',
        'name',
        
    ];
    protected $hidden = [
        'password', 
        'remember_token'
    ];
    public $timestamps = true;

}
