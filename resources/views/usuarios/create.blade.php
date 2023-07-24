@extends('layouts.layouts')
@section('titulo','Crear Usuario')

@section('subtitulo', 'Registrar nuevo usuario')

@section('contenido')
    <div class="text-center Inicio">
       
        <img src="https://img.icons8.com/?size=512&id=oCgFbjUhUSqx&format=png" style="width:160px">

        <form action="{{route('user.store')}}" method="post" class="text-center crear">
            @csrf
            
            <label class="form-label" for="nombre">
                Nombre de Usuario
                <input class="shadow form-control" type="text" name="nombre" id="nombre" placeholder="Juan Perez" value="{{ old('nombre') }}">
                @error('nombre')
                    <small>*{{$message}}</small>
                @enderror
            </label>
            
            <br>
            
            <label class="form-label " for="correo">
                Correo Electronico
                <input class="shadow form-control" type="email" name="correo" id="correo" placeholder="nombre@dominio.com" value="{{ old('correo') }}">
                @error('correo')
                    <small>*{{$message}}</small>
                @enderror
            </label>
            <br>
    
            <label class="form-label" for="contraseña">
                Contraseña
                <input class="shadow form-control" type="password" name="contraseña" id="contraseña" placeholder="*************" value="{{ old('contraseña')}}">
                @error('contraseña')
                    <small>*{{$message}}</small>
                @enderror
            </label>
            <br>
    
            <label class="form-label">
                <button class="shadow-lg btn btn-success" type="submit">
                    Guardar
                </button>
             </label>
            <a href="{{route('user.index')}}" class="shadow-lg btn btn-secondary">Cancelar</a>
        </form>
    </div>
   
    
 
@endsection
