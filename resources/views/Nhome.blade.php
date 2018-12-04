@extends('layouts.Padre')

@section('Title','Great!!')

@section('Contenido')



         <div class="Tarjetas" >
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


   @php
     $cont=0;
   @endphp
  
   @if (isset($Task))

   @foreach ( $Task as $Datos)

    
    <div class="Tarjetas" style="margin-top: 20px;">
      <form action="/delete" method="POST">
        @csrf
        <div align="center">
          <input class="NT" type="text" name="Ntarea" placeholder="Nombre nueva tarea." autocomplete="off" required="" value="{{ $Datos->Nombre}}" readonly=""> 
       </div>
         <input type="text" name="ID" value="{{ $Datos->id}}" style="visibility: hidden;position: absolute;" readonly>
       <div>
           <textarea readonly class="Task" name="Task" rows="10" cols="30" placeholder="Tu tarea." required>{{ $Datos->Tarea}}</textarea>
       </div> 
           <div class="ButtonSend">
            <button type="submit" value="Eliminar" name="Button" class="Button Send">Eliminar</button>
             </div>    
        </form>
        <!--Modal call-->
          <div class='ButtonSend' style="position: absolute;top: 50px;">
             <button type='button' class='Button Reset' data-toggle='modal' data-target={{'#myModal'.$cont}}>Editar</button>
            </div>
       </div>
    </div> 

  <!-- Modal -->
  <div class='modal fade' id={{'myModal'.$cont}} role='dialog'>
    <div class='modal-dialog'>
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
           <h3 class='modal-title'>Editar</h3>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        <div class='modal-body' >
        <div class='Tarjetas' style='width: 400px;'> 
        <form action='/edit' method='POST'>
            @csrf
        <div align='center'>
        
        <input class='NT' type='text' name='Ntarea' value="{{$Datos->Nombre}}" autocomplete="off"></div>
         <div>
          <input type='text' name='id' value="{{$Datos->id}}" style='visibility: hidden; position: absolute;'></input>
         <textarea class='Task' name='Task' rows='10' cols='30'>{{$Datos->Tarea}}</textarea>
        </div> 
        <div class='ButtonSend'>
            <button type='submit' value='Editar' name='Button' class='Button Send'>Editar</button>
        </div>
    </div>
    </form>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Cancelar</button>
        </div>
        </div>     
      </div>      
    </div>
  </div>
</div>


   

    @php
     $cont++;
    @endphp


    
    @endforeach

   


   @endisset
   


@endsection()