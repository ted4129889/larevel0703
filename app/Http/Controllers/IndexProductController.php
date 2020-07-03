<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexProductController extends Controller
{
    //
    public function allView(){
        return view('allproductChild');
    }
}
