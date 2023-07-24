@extends('layouts.layouts')
@section('titulo','Ver Usuario')

@section('subtitulo', 'Bienvenido ' . $user->name)

@section('contenido')
    
    <div class="text-center Inicio"> 
        <img src="https://img.icons8.com/?size=512&id=oCgFbjUhUSqx&format=png" style="width:160px">
        <p class="h5">
            Nombre de Usuario: {{$user->name}}
        </p>
        <p class="h5">
            Correo Electronico: {{$user->email}}
        </p>
        <div>
            <a href="{{route('user.edit',$user)}}" class="btn btn-success">Editar</a>
            <a href="{{route('user.index')}}" class="btn btn-secondary">Regresar</a>
        </div>
        
    </div>
    
    
@endsection