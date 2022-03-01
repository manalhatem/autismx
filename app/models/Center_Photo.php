<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Center_Photo extends Model
{
    protected $table='center_photos';
    protected $fillable = [
        'image'
    ];
}
