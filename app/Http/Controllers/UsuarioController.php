<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/usuarios.usuarioIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/usuarios.usuarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //AQUI SE VALIDAN LOS DATOS, PARA POSTERIORMENTE AGREGARLOS A LA BD
        
        $request->validate([
            'username' => 'required|max:255|min:3',
            'email' => 'required|email',
            'password' => 'required|max:32|min:6',
            'password_validate' => 'required|required_with:password|same:password',
            
        ]);

        // EN CASO DE QUE SE QUIERA UN CAMPO PARA VALIDAR LA CONTRASEÑA
        // |required_with:password_confirmation|same:password_confirmation'
        // 'password_confirmation' => 'max:40|min:6'
        
        Usuario::create($request->all());
        
        return redirect('/usuario')->with('success','Cuenta creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('/usuarios.usuarioShow', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->destroy($usuario->id);
        return redirect('/usuario');
    }
}
