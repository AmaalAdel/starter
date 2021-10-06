<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function showString(){
        return 'static String';
    }
}
