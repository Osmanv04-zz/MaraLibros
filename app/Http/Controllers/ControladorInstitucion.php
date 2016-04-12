<?php

namespace MaraLibros\Http\Controllers;

use Illuminate\Http\Request;
use MaraLibros\Institucion;
use MaraLibros\Http\Requests;
use MaraLibros\Http\Controllers\Controller;
use MaraLibros\Http\Requests\InstitucionRequest;
use Validator;

class ControladorInstitucion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  Institucion::all();
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
    public function store(Request $request)
    {
      /* return "hola mundo";
        echo "entrando en store";*/
        $validator = Validator::make($request->all(), [

            'correo' => 'required|unique:institucion',
            'nombre' => 'required',
            'rif'=>'required|unique:institucion',
            'direccion'=>'required|max:300',
            'clave'=>'required',

        ]);
        if ($validator->fails()) {
            $nombre=$validator->errors()->first('nombre');
            $correo=$validator->errors()->first('correo');
            $rif=$validator->errors()->first('rif');
            $direccion = $validator->errors()->first('direccion');
            $password = $validator->errors()->first('clave');
            $errores=["error" => true, 'nombre' =>$nombre, 'correo' => $correo, 'rif' => $rif,
             'direccion' => $direccion, 'clave' => $password];
            //utf8_encode_deep($errores);

            $response=response()->json($errores);
            $response->header('Content-Type', 'application/json');
            $response->header('charset', 'utf-8');
            return $response;
        }
        else{


            $institucion=new Institucion;
            $institucion->nombre=$request['nombre'];
            $institucion->rif=$request['rif'];
            $institucion->correo=$request['correo'];
            $institucion->direccion=$request['direccion'];
            $institucion->clave=$request['clave'];

            /* completa aqui los de mas campos */
            $institucion->save();

            $response=["error" => false,'respuesta' => true];

            return $response;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}
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
