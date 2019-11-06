<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'gender',
        'company',
        'city',
        'title',
        'latitude',
        'longitude'
    ];
}
