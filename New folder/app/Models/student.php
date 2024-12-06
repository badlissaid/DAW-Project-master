<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class student extends Model
{
    protected $table = 'students';
    public $timestamps = false;
    protected $fillable = [
        'users_id',
        'competens',
        'spécific'
    ];
    public function users (){
        return $this->hasOne(user::class);
    }
}
