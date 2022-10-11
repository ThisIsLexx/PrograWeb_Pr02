<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //AQUI SERÁ LA VISTA PRINCIPAL
        
        //la variable platillos será un arreglo que contiene todos los platilos contenidos en la base de datos
        $platillos = Platillo::all();

        return view('platillos.platilloIndex', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platillos/platilloCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //AQUI VALIDAMOS, INSERTAMOS Y RETORNAMOS A UNA NUEVA VISTA
        $request->validate([
            'nombre_platillo' => 'required|max:255|min:3',
            'tam_platillo' => 'required',
            'precio_platillo' => 'required|max:10',
            'descripcion_platillo' => 'required',
        ]);

        Platillo::create($request->all());

        return redirect('/platillo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        return view('/platillos.platilloShow', compact('platillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {
        return view('/platillos.platilloEdit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        //

        $platillo->nombre_platillo = $request->nombre_platillo;
        $platillo->tam_platillo = $request->tam_platillo;
        $platillo->precio_platillo = $request->precio_platillo;
        $platillo->descripcion_platillo = $request->descripcion_platillo;
        $platillo->save();


        return redirect('/platillo');
        // UNA MANERA DE REALIZAR UNA CONSULTA, ES LA SIGUIENTE:
        // Platillo::where('id', $platillo->id)->update($request->all());
        // Esta consulta podría generar problemas si se esta utilizando un toquen, por lo que deberia
        // ser enviado por parametro.
        // Para realizar esto, dentro de request se utiliza el metodo "except", except('_token','_method')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        $platillo->destroy($platillo->id);
        return redirect('/platillo');
    }
}
