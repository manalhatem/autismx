<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table='departments';
    protected $fillable = [
        'name', 'category_id'
    ];
}
