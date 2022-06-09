<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customers extends Model
{
    use HasFactory;
   


    //this is mutator in which the data set when the data transform to database in insertion time 
    // the mutator modify the data in insertion time.
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    //this is accessor in which the data is modify from fecting time form database.. 
    public function getDobAttribute($value)
    {
        return date("d-M-Y", strtotime($value));
    }
}
