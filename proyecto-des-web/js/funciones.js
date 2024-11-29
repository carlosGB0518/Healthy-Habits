
        $(document).ready(function() {
    
            $("#registerForm").validate({

                rules:{
                    username:{
                        required: true,
                        minlength: 5
                    },
                    password:{
                    required: true,
                    minlength: 6
                },
                confirmPassword:{
                    required: true,
                    minlength: 6

                },
                email:{
                    required: true,
                    email: true
                },
                phone:{
                    required: true,
                    number: true,
                    minlenght: 10,
                    maxlenght: 10

                }
            },
            messages:{
                usernbame:{
                    required:"El nombre de usuario es obligatorio",
                    minlength:"es necesario minimo 10 caracteres"
                },
                password:{
                    required:"la contraseña es obligatoria",
                    minlength:"es necesario minimo 6 caracteres"
                },
                confirmPassword:{
                    required:"confirmar la contraseña es obligatorio",
                    minlength:"es necesario minimo 6 caracteres"
                },
                email:{
                    required:"El correo es obligatorio",
                    email:"es necesario un correo valido"
                },
                phone:{
                    required:"El telefono es obligatorio",
                    minlength:"es necesario minimo 10 caracteres",
                    minlenght: "son minimo 10 caracteres",
                    maxlenght: "son maximo 10 caracteres"
                },

            }
            });

            
        });
    