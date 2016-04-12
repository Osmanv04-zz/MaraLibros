<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cree su cuenta</h4>
            </div>
            <div class="modal-body">

                {!! Form::open() !!}

                <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                    <strong> Usuario Agregado Correctamente.</strong>
                </div>
                <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">

                </div>

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
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                {!!link_to('#',$title='Registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure =null) !!}
                <!--{!Form::submit('Regitrar',['class'=>'btn btn-primary', 'id' => 'registro'])!}-->
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

</div><!-- /.modal -->
<!--
<script>
    $("#registro").click(function(){

        var route = "/institucion";
        var token = $("#token").val();
        var dato={"nombre": $("#nombre").val(),"rif":$("#rif").val(),"correo":$("#correo").val(),"direccion":$("#direccion").val(),
            "password":$("#pass").val(),"passwordrepeat":$("#repass").val()};
        alert(dato.nombre);
        var datoJson = json.parse(dato);

        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:{institucion:datoJson},

            success:function(){
                alert("Entrando en succes");
                $("#msj-success").fadeIn();
            }
            /*
             error:function(msj){
             $("#msj").html(msj.responseJSON.institucion);
             $("#msj-error").fadeIn();
             }*/
        });
    });
</script>
-->
