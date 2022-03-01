<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table='centers';
    protected $fillable = [
        'centerName', 'email', 'phone','password','address','photo_id'
    ];
}
