$('#idForm').submit(function(){

    var route = "localhost/institucion";
    var token = $("#token").val();
    var dato = $('#idForm').serialize();
    alert(route);
    alert(dato);

    $.ajax({
        url:route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{nombre : "nombre",rif:"rif",correo:"correo",direccion:"direccion",
            password:"pass",passwordrepeat:"rpass"},
        success : function(json) {
            alert(json);
        }

    });
});