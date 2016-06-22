<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LogController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function index(){ 
        $categoria = DB::table('categorias')->value('nombre');
        return view("index",['categorias'=>$categoria]);
    }

    public function loadLogin(){ 
        return view("login");
    }

    public function crud(){
        $users = DB::table('usuarios')->get();
        return view("crud",['users'=>$users]);
    }
} 