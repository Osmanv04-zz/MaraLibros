<?php

namespace MaraLibros\Http\Controllers;

use Illuminate\Http\Request;

use MaraLibros\Http\Requests;
use MaraLibros\Http\Controllers\Controller;

class ControladorInstitucion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institucion.createModal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        echo "usuario en store";
        if($request->ajax()){
            echo "entro en el ajax";
            return response()->json([
                "mensaje"=>$request->all()
            ]);
        }
        else
            echo 'no entro en el ajax';
       /**
        \MaraLibros\Institucion::create([
            'nombre'=>$request['nombre'],
            'rif'=>$request['rif'],
            'correo'=>$request['correo'],
            'clave'=>bcrypt($request['password']),
        ]);

        return "Usuario registrado";*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
