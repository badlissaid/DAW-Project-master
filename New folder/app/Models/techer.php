<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class techer extends Model
{
    protected $fillable = [
        'id',
        'users_id'
    ];
}