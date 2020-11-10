@extends('layout.master')
        
        @section('menu')
        @parent
       	 <p>este condenido es añadido al menú principal.</p>
        @endsection

        @section('content')
           
            
            <h1> Datos del usuario: {{ $name }}. </h1>
            <h1> La hora actual del sistema es: {{ now() }}.</h1>    

            @for ($i=0; $i< $max; $i++)
            Registro No.{{$i+1}} ....{{$dato}} {{$i+1}} <br>
            @endfor

        @endsection
       

  
    
  