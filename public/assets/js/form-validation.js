(function($) {
    'use strict';
    /*$.validator.setDefaults({
        submitHandler: function(form) {
            form.submit(); // Envía el formulario después de validarlo
        }
    });*/
    $(document).ready(function() {
        const regexCURP = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;

        $.validator.addMethod("curp", function(value, element) {
            return this.optional(element) || regexCURP.test(value);
        }, "Por favor, ingresa una CURP válida.");

        $("#signupForm").validate({
            rules: {
                nombre: "required",
                apellidos: "required",
                telefono: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                celular: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                curp: {
                    required: true,
                    curp: true
                },
                nombre_usuario: {
                    required: true,
                    minlength: 2
                },
                correo_electronico: {
                    required: true,
                    email: true
                },
                contrasennia: {
                    required: true,
                    minlength: 5
                },
                confirmacion_contrasennia: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                activo: "required"
            },
            messages: {
                nombre: "Ingresa tu nombre",
                apellidos: "Ingresa tu apellido",
                telefono: {
                    required: "Ingresa tu teléfono",
                    digits: "El teléfono debe contener solo números",
                    minlength: "El teléfono debe tener 10 dígitos",
                    maxlength: "El teléfono debe tener 10 dígitos"
                },
                celular: {
                    required: "Ingresa tu celular",
                    digits: "El celular debe contener solo números",
                    minlength: "El celular debe tener 10 dígitos",
                    maxlength: "El celular debe tener 10 dígitos"
                },
                curp: "Por favor, ingresa una CURP válida",
                nombre_usuario: {
                    required: "Ingrese un nombre de usuario",
                    minlength: "El nombre de usuario debe tener al menos 2 caracteres"
                },
                correo_electronico: "Ingrese una dirección de correo electrónico válida",
                contrasennia: {
                    required: "Ingrese una contraseña",
                    minlength: "La contraseña debe tener al menos 5 caracteres"
                },
                confirmacion_contrasennia: {
                    required: "Ingrese una contraseña",
                    minlength: "La contraseña debe tener al menos 5 caracteres",
                    equalTo: "Las contraseñas no coinciden"
                },
                activo: "Seleccione si el usuario está activo"
            },
            errorPlacement: function(label, element) {
                label.addClass('mt-2 text-danger');
                label.insertAfter(element);
            },
            highlight: function(element) {
                $(element).parent().addClass('has-danger');
                $(element).addClass('form-control-danger');
            }
        });

        $("#signupForm").on('submit', function(e) {
            e.preventDefault(); // Evita que el formulario se envíe de manera tradicional
            var formData = $(this).serialize(); // Serializa los datos del formulario

            $.ajax({
                url: "{{ route('register.store') }}",
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')                 },
                success: function(response) {
                    if (response == "success") {
                        alert("Usuario registrado con éxito.");
                    } else {
                        alert("Hubo un error al registrar el usuario.");
                    }
                },
                error: function() {
                alert("Datos Guardados.");
                }
            });
        });
    });
})(jQuery);

