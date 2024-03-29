<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pelanggan extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable=[
        'pelanggan',
        'email',
        'password',
        'alamat',
        'telepn\on'
    ];
}
