<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\adminModel as Authenticatable;

class adminModel extends Model
{
    protected $fillable = [
        'name', 'password',
    ];
}
