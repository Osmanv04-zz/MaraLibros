<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cree su cuenta</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['route'=>'institucion.store','method'=>'POST','id'=>'idForm']) !!}



                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token" >

                <div class="form-group">
                    {!! Form::label('Nombre de la institucion') !!}
                    {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese el nombre de su institucion']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('Rif') !!}
                    {!! Form::text('rif',null,['id'=>'rif','class'=>'form-control','placeholder'=>'Ingrese el rif']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Correo') !!}
                    {!! Form::email('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Ingrese su correo']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Direccion') !!}
                    {!! Form::text('direccion',null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Ingrese su direccion']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Password') !!}
                    {!! Form::password('password',['id'=>'pass','class'=>'form-control','placeholder'=>'Ingrese su password']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Repita su Password') !!}
                    {!! Form::password('passwordrepeat',['id'=>'rpass','class'=>'form-control','placeholder'=>'Repita su password']) !!}
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--{! link_to('#',$title='Registrar',$attributes=['id'=>'registro','type'=>'submit','class'=>'btn btn-primary'],$secure =null) !!}-->
                {!!Form::submit('Regitrar',['class'=>'btn btn-primary', 'id' => 'registro'])!!}
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
