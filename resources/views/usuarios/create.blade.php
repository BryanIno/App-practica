@extends('layouts.layouts')
@section('titulo','Crear Usuario')

@section('contenido')
    <h1>
        Crear Usuario
    </h1>
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <label class="form-label" for="nombre">
            Nombre de Usuario:
            <input class="form-control" type="text" name="nombre" id="nombre">
        </label>
        @error('nombre')
            <small>{{$message}}</small>
        @enderror
        <br>
        
        <label class="form-label" for="correo">
            Correo Electronico:
            <input class="form-control" type="email" name="correo" id="correo">
        </label>
        @error('correo')
            <small>{{$message}}</small>
        @enderror
        <br>

        <label class="form-label" for="contraseña">
            Contraseña
            <input class="form-control" type="password" name="contraseña" id="contraseña">
        </label>
        @error('password')
            <small>{{$message}}</small>
        @enderror
        <br>

        <label class="form-label">
            <button class="btn btn-success" type="submit">
                Guardar
            </button>
         </label>
        <a href="{{route('user.index')}}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection