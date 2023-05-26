@extends('layouts.layouts')
@section('titulo','Editar Usuario')

@section('contenido')
    <h1>
        Editar usuarios
    </h1>

    <form action="{{route('user.update',$user)}}">
        @csrf
        @method('put')
        <label for="nombre">
            Nombre de Usuario:
            <input type="text" name="nombre" id="nombre" value="{{$user->name}}">
        </label>

        <label for="correo">
            Correo Electronico:
            <input type="email" name="correo" id="correo" value="{{$user->email}}">
        </label>
        <label for="contraseña">
            Contraseña
            <input type="password" name="contraseña" id="contraseña" value="">
        </label>
        <button type="submit" class="btn btn-success">
            Guardar
        </button>
        <a href="{{route('user.index')}}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection