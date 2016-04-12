/*$('#registro').click( function (e) {
        e.preventDefault();
        var form=$('#idForm');
        var button= $(this);
        var action=form.attr('action');
        alert (action);
        alert(form.serialize());
        $.post(action,form.serialize(),function (response){
            $('#msj-success').fadeIn();
            $('#myModal').modal('hide');
        }).fail(function(){
            alert("hubo un error");
            Donde
        });
    });
*/
$('#registro').click(function(){

    var route = "http://localhost/MaraLibros/public/institucion";
    var token = $("#token").val();
    var nom = $('#nombre').val();
    var r= $('#rif').val();
    var cor = $('#correo').val();
    var dir=$('#direccion').val();
    var pass=$('#pass').val();
    var rpass = $('#rpass').val();
    console.log("me llamaron");

    $.ajax({
        url:route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{nombre : nom,rif:r,correo:cor,direccion:dir,
            clave:pass,passwordrepeat:rpass},
        success : function(data) {
          //  $('#msj-success').fadeIn();
            console.log(data);
            if(data['error']=="true"||data['error']==true){
              if(data['nombre']!=""){
                $('#msj-error').append(data['nombre']);
                $('#msj-error').append('<br>');
              }
              if(data['rif']!=""){
                $('#msj-error').append(data['rif']);
                $('#msj-error').append('<br>');
              }
              if(data['correo']!=""){
                $('#msj-error').append(data['correo']);
                $('#msj-error').append('<br>');
              }
              if(data['direccion']!=""){
                $('#msj-error').append(data['direccion']);
                $('#msj-error').append('<br>');
              }
              if(data['clave']!=""){
                $('#msj-error').append(data['clave']);
                $('#msj-error').append('<br>');
              }


              /*completa aqui los demas if con los demas campos */
              $('#msj-error').show();

            }else{
                $('#msj-success').fadeIn();
                $('#nombre').val("");
                $('#rif').val("");
                $('#direccion').val("");
                $('#correo').val("");
                $('#pass').val("");
                $('#rpass').val("");
                $('#msj-error').hide();
                $('#msj-success').fadeOut();
                /* completa aqui los demas campos para liompiar los inputs */
            }
            //$('#myModal').modal('hide');
        },


    });
});
