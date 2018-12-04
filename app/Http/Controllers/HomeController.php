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

        $Task = Lista::all()->where('Correo',auth::user()->email);

        return view('Nhome',compact('Task'));
         
    }



    // guardado 

    public function Guardar(Request $Request){

        $Var = new Lista();

        $Var->Nombre = $Request->input('Ntarea','Tarea sin nombre');
        $Var->Tarea = $Request->input('Task');
        $Var->Correo = auth::user()->email;
        $Var->save();
        
         return redirect('home');

       
    }

    // eliminar 

        public function Borrar(Request $Request){


        $D= $Request->input('ID');

       
        DB::table('listas')
            ->where('id',$D)
            ->delete();

            
            $Var = new Lista();

            return redirect('home');
    }


    // editar

    public function editar(Request $Request){

      
        $D= $Request->input('id');
        $Nt=$Request->input('Ntarea','Tarea sin nombre');
        $T= $Request->input('Task');


        DB::table('listas')
            ->where('id',$D)
            ->update(['Nombre' => $Nt],['Tarea' => $T]);

        //return redirect ('home');     


    }


    public function Salir (){
        Auth::logout();
        return view('welcome');
    }





}
