<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
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

        //return view('Nhome',compact('Task'));
         

         //return redirect()->back()->with(compact('Task'));

        
         return redirect('home')->with('Task',compact('Task'));

       
    }

    // eliminar 

        public function Borrar(Request $Request){


        $D= $Request->input('ID');

       
        DB::table('listas')
            ->where('id',$D)
            ->delete();

            
            $Var = new Lista();
            $Task=Lista::all();

            return view('Nhome',compact('Task'));
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
