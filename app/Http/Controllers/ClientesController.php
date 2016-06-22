<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\EquipoTrabajo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
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

    public function getClientes(Request $request){
        if($request->ajax()){
           return json_encode(DB::table('clientes')->where("status","=",1)->get());
        }
    } 

    public function deleteClient(Request $request){
        if($request->ajax()){
            $id = $request->get('id');
            DB::table('clientes')->where('id','=',$id)->update(['status'=>0]);
            return;
        }
    }

    public function insertClient(){

    }

    public function updateClient(){

    }

    public function getEquipo(Request $request){
        if($request->ajax()){
            return json_encode(EquipoTrabajo::all());
        }
    }

    public function loadLogin(){ 
        return view("login");
    }

    public function crud(){
        $users = DB::table('usuarios')->get();
        return view("crud",['users'=>$users]);
    }

    public function loadMainView(){
        return view("admin.clientes.index");
    }
} 