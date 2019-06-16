<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'age',
        'address',
        'client_id'
    ];
}
