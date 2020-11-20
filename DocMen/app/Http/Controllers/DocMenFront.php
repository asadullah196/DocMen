<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocMenFront extends Controller
{
    // DocMen Home Page Fuction for calling front page vue file
    function HomePage(){
        return view("DocIndex");
    }
}
