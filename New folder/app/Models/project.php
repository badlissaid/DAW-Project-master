<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $fillable = [
      'id',
      'title',
      'description',
      'keyword'
    ];
}
