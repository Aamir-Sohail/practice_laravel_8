<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Members extends Model
{
    use HasFactory;
    protected $primaryKey ="member_id";
    public function getGroup()
    {
        // this relationship is used for the one to one...
        // return $this->hasOne('App\Models\Group', 'group_id');
        //One To many relationship....
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id');
    }
}
