@extends('layouts.principal')
@section('content')

    {!! Form::open(['route'=>'institucion.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Nombre de la institucion') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de su institucion']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('Rif') !!}
        {!! Form::text('rif',null,['class'=>'form-control','placeholder'=>'Ingrese el rif']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Correo') !!}
        {!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'Ingrese su correo']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Direccion') !!}
        {!! Form::email('direccion',null,['class'=>'form-control','placeholder'=>'Ingrese su direccion']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Password') !!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese su password']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Repita su Password') !!}
        {!! Form::password('passwordrepeat',['class'=>'form-control','placeholder'=>'Repita su password']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection