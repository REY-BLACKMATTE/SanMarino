var base_url = 'http://192.168.0.29/SanMarino/public/';
$(document).ready(function() {

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

   $('#createUsuarioForm').submit(function(event) {

        guardaDatosUsuarios();

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});

$('#save').on('click', function() {
    var formToValidate = userForm;
    //flagValidate = validateForm(formToValidate);
    flagValidate = true;
    if(flagValidate == true){
      $('#userForm').submit();
    }else{
      return false
    }
});

/*Metodo para preparar el modal de registro y edicion*/
function prepareModalForm(id, axn, titulo) {

    if (axn == 'edit') {
        $('#userForm').attr('action', 'users.update');
        $('#userEmail').hide();
        $('#userPass').hide();
        $('#userConfirmPass').hide();
        var $id, $key;
        $id = id;
        $key = $('#key').val();
        var formData = new FormData();
        formData.append('_token', $key);
        formData.append('id', $id);
        $.ajax({
            async: false,
            url: 'users.edit' + '?' + '_token=' + $key + '&id=' + $id,
            method: 'post',
            data: formData,
            processData: false,
            contentType: false
        }).always(function() {
          ALERTACARGANDO();
        }).done(function(result) {
          CERRARALERTA();
            var usuario = result.success;

            //console.log(usuario);
            $('#usuarioModal').val(usuario[0].name);
            $('#nombreModal').val(usuario[0].user_name);
            $('#apellidoPModal').val(usuario[0].last_name1);
            $('#apellidoMModal').val(usuario[0].last_name2);
            if(usuario[0].photo != ''){
              $('#fotoModal').attr('src', usuario[0].photo);
            }else{
              $('#fotoModal').attr('src', 'assets/admin-lte/dist/img/avatar-default.png');
            }

            $('#estado_edit').val(usuario[0].idEstado).prop('selected', true);
            $('#roles_edit').val(usuario[0].rol_id).prop('selected', true);
            $('#subdireccion_edit').val(usuario[0].IdSubdireccion).prop('selected', true);
            $('#correoModal').val(usuario[0].email);
            $('#estatusModal').val(usuario[0].status).prop('selected', true);
            $('#contraseñaModal').val(usuario[0].password_AD);
            $('#contraseñaConfirmarModal').val(usuario[0].password_AD);

        }).fail(function() {
            alert('Error');
        });
    }
    if(axn=='insert'){
      $("#userForm")[0].reset();
      $('#userForm').attr('action', 'usuarios.guardar');
      $('#fotoModal').attr('src', 'assets/admin-lte/dist/img/avatar-default.png');
      $('#userEmail').show();
      $('#userPass').show();
      $('#userConfirmPass').show();
    }
    var modalConstruct = {
        data: {
            title: titulo,
            id: id,
            axn: axn
        },
        properties: {
            size: {
                width: '60%',
                height: 'auto',
            }
        }
    }
    modalForm(modalConstruct);
}


/*
* Metodo que guarda las personas
*/
function guardaDatosUsuarios(){

    usuario             = $('#usuario').val();
    email               = $('#email').val();
    nombre              = $('#nombre').val();
    apellidoP           = $('#apellidoP').val();
    apellidoM           = $('#apellidoM').val();
    password            = $('#password').val();
    calle               = $('#calle').val();
    numExterior         = $('#numero').val();
    numInterior         = $('#numInterior').val();


    //if(fValidation) {
         data = {   'usuario'       : usuario,
                    'nombre'        : nombre,
                    'email'         : email,
                    'apellidoP'     : apellidoP,
                    'apellidoM'     : apellidoM,
                    'password'      : password,
                    'calle'         : calle,
                    'numExterior'   : numExterior,
                    'numInterior'   : numInterior,
                    };

        /*Mandamos la peticion ajax*/
        setTimeout(function () {
            $.ajax({
                url: base_url + 'usuarios/guardar',
                method: 'POST',
                async: true,
                dataType: 'json',
                data: {data : JSON.stringify(data)},
                //timeout: 3000,
                success: function(data){
                   console.log(data.error);
                    if(data.error != null){
                        setTimeout(function () {
                            alert("Error", "Los datos no han sido guardados correctamente, contacte al administrador del sistema", "", "info");
                        }, 1000);
                    }
                    if(data.success != null){
                            setTimeout(function () {
                                    alert("Exito", "Los datos fueron guardados correctamente", base_url + "home", "info");
                                }, 1000);
                        }

                },
                error: function(data){
                    setTimeout(function () {
                        alert("Confirmación", "Los datos no han sido guardados, contacte al administrador del sistema", "", "info");
                    }, 1000);
                }

            });
        }, 1000);

    //}
    return false;

//});
}
