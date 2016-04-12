@extends('layouts.principal')
@section('content')

    {!! Form::open(["id" =>"idForm"]) !!}

    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong> Agregado Correctamente. Revise su correo para verficar su cuenta</strong>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token" >

    <div class="form-group">
        {!! Form::label('Nombre de la institucion') !!}
        {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese el nombre de su institucion']) !!}


        {!! Form::label('Rif') !!}
        {!! Form::text('rif',null,['id'=>'rif','class'=>'form-control','placeholder'=>'Ingrese el rif']) !!}

        {!! Form::label('Correo') !!}
        {!! Form::email('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Ingrese su correo']) !!}

        {!! Form::label('Direccion') !!}
        {!! Form::text('direccion',null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Ingrese su direccion']) !!}

        {!! Form::label('Password') !!}
        {!! Form::password('password',['id'=>'pass','class'=>'form-control','placeholder'=>'Ingrese su password']) !!}

        {!! Form::label('Repita su Password') !!}
        {!! Form::password('passwordrepeat',['id'=>'rpass','class'=>'form-control','placeholder'=>'Repita su password']) !!}



        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure =null) !!}
         </div>
                <!--{!Form::submit('Regitrar',['class'=>'btn btn-primary', 'id' => 'registro'])!}-->

    {!! Form::close() !!}

@endsection
