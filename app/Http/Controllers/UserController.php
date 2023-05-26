<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioFormulario;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=User::all();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioFormulario $request)
    {
        $usuario=new User();
        $usuario->name=$request->nombre;
        $usuario->email=$request->correo;
        $usuario->password=$request->contraseña;
        $usuario->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('usuarios.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {   
        return view('usuarios.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioFormulario $request, User $user)
    {
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=$request->contraseña;
        $user->save();
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
