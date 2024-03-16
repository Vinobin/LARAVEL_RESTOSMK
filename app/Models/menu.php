<?php
namespace App\models;
use Illuminate\Database\Eloquent\factories\hasfactory;
use Illuminate\Database\Eloquent\model;

class menu extends model{
    use Hasfactory;

    protected $fillable=[
        'idkategori',
        'menu',
        'deskrips',
        'harga',
        'gambar',
    ];
}