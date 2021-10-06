<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function showUserName(){
        return 'welcome user';
    }
    public function getIndex(){
        $obj = new \stdClass();

        return view('welcome')->with('name','ahmed emam');
    }
}
