@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto px-4 text-center" >
        <x-alert type="danger" class="mb-4"> 
            <x-slot name="title"> ERORR DE REGISTRO </x-slot> 
            El proveedor fué registrado correctamente
        </x-alert>
        <p>hola mundo</p>
    </div>
@endsection 
    
   
  
