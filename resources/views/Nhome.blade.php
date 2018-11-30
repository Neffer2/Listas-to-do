@extends('layouts.Padre')

@section('Title','Great!!')

@section('Contenido')


  

    <div class="Tarjetas" style="margin-top: 20px;">
      <form action="/save" method="POST">
        @csrf
        <div align="center">
          <input class="NT" type="text" name="Ntarea" placeholder="Nombre nueva tarea." autocomplete="off" required=""> 
       </div>
       <div>
           <textarea class="Task" name="Task" rows="10" cols="30" placeholder="Tu tarea." required></textarea>
       </div> 
           <div class="ButtonSend">
            <button type="submit" value="Guardar" name="Button" class="Button Send">Guardar</button>
             </div>
             </form>
       </div>
    </div>



   @if (session('status'))

   {{ "Aqui estoy" }}

    @foreach ($Task as $Datos)


    <div class="Tarjetas" style="margin-top: 20px;">
      <form action="" method="">
        @csrf
        <div align="center">
          <input class="NT" type="text" name="Ntarea" placeholder="Nombre nueva tarea." autocomplete="off" required="" value="{{ $Datos->Nombre}}"> 
       </div>
       <div>
           <textarea class="Task" name="Task" rows="10" cols="30" placeholder="Tu tarea." required>{{ $Datos->Tarea}}</textarea>
       </div> 
           <div class="ButtonSend">
            <button type="submit" value="Guardar" name="Button" class="Button Send">Guardar</button>
             </div>
             </form>
       </div>
    </div>
    @endforeach

   @endif
   


@endsection()