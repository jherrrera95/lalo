<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;

class Inicio extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function index(){
        return view("index");
    }
} 