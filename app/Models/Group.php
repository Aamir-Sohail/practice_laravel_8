<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    function member()
    {
        return $this->hasMany('App\Models\Members','group_id','group_id');
    }
}
