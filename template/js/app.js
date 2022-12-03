var exp = /^(([^<>()\[\]\.,;:\s@\”]+(\.[^<>()\[\]\.,;:\s@\”]+)*)|(\”.+\”))@(([^<>()[\]\.,;:\s@\”]+\.)+[^<>()[\]\.,;:\s@\”]{2,})$/
jQuery(document).ready(($) => {
    $('#enviar').click((e) => {
        e.preventDefault()
        let tel = $('#telefono').val().trim();
        console.log(tel.length);
        if ($('#nombre').val() === '') {
            alertas('El campo nombre esta vacio');
        } else if ($('#email').val() === '') {
            alertas('El campo email esta vacio');
        } else if (!exp.test($(email).val())) {
            alertas('Formato de correo incorrecto');
        } else if ($('#telefono').val() === '') {
            alertas('El campo telefono esta vacio');
        } else if (tel.length < 6 || tel.length > 14) {
            alertas('El telefono no es valido');
        } else if ($('#mensaje').val() === '') {
            alertas('El campo mensaje esta vacio');
        } else if ($('#asunto').val() === '') {
            alertas('El campo asunto esta vacio');
        } else if ($('#terminos').is(':checked') === false) {
            alertas('El campo de aceptación de politicas no esta seleccionado');
        } else {
            $.ajax({
                url: 'http://localhost/bluecell/wordpress/wp-admin/admin-ajax.php',
                type: 'post',
                data: {
                    action: 'instertUser',
                    nombre: $('#nombre').val(),
                    email: $('#email').val(),
                    telefono: $('#telefono').val(),
                    mensaje: $('#mensaje').val(),
                    asunto: $('#asunto').val(),
                    check: 1,
                },
                success: envio('Datos enviados correctamente')



            });
        }
    })

    function alertas(mesaje) {
        return Swal.fire(
            mesaje,
            '',
            'error'
        )
    }

    function envio(mesaje) {
        return Swal.fire(
            mesaje,
            '',
            'success'
        )
    }
})