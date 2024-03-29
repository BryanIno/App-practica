@extends('layouts.layouts')

@section('titulo','Editar Usuario')

@section('subtitulo', 'Editar Usuario')

@section('contenido')
    <div class="text-center Inicio">
        <img src="https://img.icons8.com/?size=512&id=oCgFbjUhUSqx&format=png" style="width:160px">
        <form action="{{route('user.update',$user)}}" method="post" class="text-center">
            @csrf
            @method('put')
            <label for="nombre" class="form-label">
                Nombre de Usuario:
                <input class="form-control" type="text" name="nombre" id="nombre" value="{{$user->name}}">
                @error('nombre') <!--Acá recibimos el error de la validación del request -->
                        <small>*{{$message}}</small>
                @enderror
            </label>
            <br>
            <label for="correo" class="form-label">
                Correo Electronico:
                <input class="form-control" type="email" name="correo" id="correo" value="{{$user->email}}">
                @error('correo')
                        <small>*{{$message}}</small>
                @enderror
            </label>
            <br>
            <label for="contraseña" class="form-label">
                Contraseña:
                <input class="form-control" type="password" name="contraseña" id="contraseña" value="">
                @error('contraseña')
                        <small>*{{$message}}</small>
                @enderror
            </label>
            <br>
            <label class="form-label">
                <button class="btn btn-success" type="submit">
                    Guardar
                </button>
             </label>
            <a href="{{route('user.index')}}" class="btn btn-secondary">Cancelar</a>
            
        </form>
    </div>
   
@endsection