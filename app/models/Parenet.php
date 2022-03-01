<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Parenet extends Model
{
    protected $table='parents';
    protected $fillable = [
        'userName', 'email', 'phone','password','address','child_name','child_age','child_image','child_gender'
    ];
}
