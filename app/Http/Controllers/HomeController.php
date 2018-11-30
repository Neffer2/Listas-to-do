<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Lista;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('Nhome');
    }



    // guardado 

    public function Guardar(Request $Request){

        $Var = new Lista();

        $Var->Nombre = $Request->input('Ntarea','Tarea sin nombre');
        $Var->Tarea = $Request->input('Task');
        $Var->save();
        
        $Task = Lista::all();

        /*$Task = DB::table('listas')->where('Nombre', 'Hola')->first();

        echo $Task->Nombre;
        */

        return view('Home2',compact('Task'));

      

    }

    // eliminar 

        public function Borrar(Request $Request){


        $D= $Request->input('ID');

        // echo $Var->id;

        DB::table('listas')
            ->where('id',$D)
            ->delete();

        $Task = DB::table('listas')->get();

            return view('Home2',compact('Task'));
    }

    // editar

    public function editar(Request $Request){

        $Var = new Lista();

        $D= $Request->input('ID');

        // echo $Var->id;

        DB::table('listas')
            ->where('id',$D)
            ->update(['Nombre' => 'Me editaron']);

    }


    public function Salir (){
        Auth::logout();
        return view('welcome');
    }





}
