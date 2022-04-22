<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Group;

class TestingController extends Controller
{
    public function index()
    {
        //get many data in single
        return Members::with('getGroup')->get();
        //for single data show in forign key.....
        // return Members::find(1)->getGroup;

    }
    public function group()
    {
     return Group::with('member')->get();
    }
}
