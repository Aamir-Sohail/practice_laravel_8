<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function index()
   {
       return view('DemoProject.Demo_home'); 

   }
   public function aboutpage()
   {
       return view('DemoProject.Demo_about');
   }
    public function coursespage()
    {
        return view('DemoProject.Demo_courses');

    }
}
