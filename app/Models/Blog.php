<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','url','review','position','activated','created_at','updated_at',
    ];
    protected $dates = [
        'created_at','updated_at',
    ];

}
