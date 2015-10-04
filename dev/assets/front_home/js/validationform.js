 $.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       && /[a-z]/.test(value) // has a lowercase letter
       && /\d/.test(value) // has a digit
});

 $('#sing-form').validate({
        rules: {
             email: { required: true, email:true },			 
              password: { required: true, minlength: 6, maxlength: 15},
        },
        messages: {

            email: {
                required: "Campo requerido."
            },
			 password: {
                required: "Campo requerido.",
				minlength:"No debe ser menos de 6 caracteres",
				maxlength:"No debe ser mas de 15 caracteres",
				pwcheck: "debe contener al menor un numero"
            },

        },
        errorClass: "valid-g",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').removeClass('has-error');
            $(element).parents('.valid-g').addClass('success');
        },
        showErrors: function(errorMap, errorList) {

            $.each(this.validElements(), function(index, element) {
                var $element = $(element);
                $element.parents('.valid-g').removeClass("has-error")
                var de = "#" + $element.attr("name");
                $(de).tooltip("destroy");
            });

            $.each(errorMap, function(key, value) {
                $("#" + key).parents('.valid-g').addClass('has-error');
                //$("#" + key).tooltip("destroy").tooltip({"animation": true, "placement": "right", "trigger": "focus", "title": value});
            });
        }
    });
 
 $('#pass-form').validate({
        rules: {
             newemail: { required: true, minlength: 6, maxlength: 15, pwcheck:true },
			 
             renewemail: { required: true, minlength: 6, equalTo: '#newemail' },

        },
        messages: {

            reemail: {
                 required: "Campo requerido.",
				minlength:"No debe ser menos de 6 caracteres",
				maxlength:"No debe ser mas de 15 caracteres",
				pwcheck: "debe contener al menor un numero"
            },
			renewemail: {
                required: "Campo requerido.",
				equalTo: "No son iguales"
            }

        },
        errorClass: "valid-g",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').removeClass('has-error');
            $(element).parents('.valid-g').addClass('success');
        },
        showErrors: function(errorMap, errorList) {

            $.each(this.validElements(), function(index, element) {
                var $element = $(element);
                $element.parents('.valid-g').removeClass("has-error")
                var de = "#" + $element.attr("name");
                $(de).tooltip("destroy");
            });

            $.each(errorMap, function(key, value) {
                $("#" + key).parents('.valid-g').addClass('has-error');
                //$("#" + key).tooltip("destroy").tooltip({"animation": true, "placement": "right", "trigger": "focus", "title": value});
            });
        },
        //aqui es el funcionamiento del boton guardar
        submitHandler: function(form) {

            $.ajax({
                type: "POST",

                url: base_url+"h/forgetupdated",
                data: $('#pass-form').serialize(),

                success: function(msg) {
                    var a = msg.trim();

					$('#responForget').text(msg);
                },

                error: function(msg) {
                    alert("Error");
                }
            });

        }
    });
 
 $('#email-form').validate({
        rules: {
            reemail: {
                email:true,
                required: true
            }

        },
        messages: {

            reemail: {
                required: "Campo requerido."
            }

        },
        errorClass: "valid-g",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').removeClass('has-error');
            $(element).parents('.valid-g').addClass('success');
        },
        showErrors: function(errorMap, errorList) {

            $.each(this.validElements(), function(index, element) {
                var $element = $(element);
                $element.parents('.valid-g').removeClass("has-error")
                var de = "#" + $element.attr("name");
                $(de).tooltip("destroy");
            });

            $.each(errorMap, function(key, value) {
                $("#" + key).parents('.valid-g').addClass('has-error');
                //$("#" + key).tooltip("destroy").tooltip({"animation": true, "placement": "right", "trigger": "focus", "title": value});
            });
        },
        //aqui es el funcionamiento del boton guardar
        submitHandler: function(form) {

            $.ajax({
                type: "POST",

                url: base_url+"h/forgetsend",
                data: $('#email-form').serialize(),

                success: function(msg) {
                    var a = msg.trim();

					$('#responForget').text(msg);
                },

                error: function(msg) {
                    alert("Error");
                }
            });

        }
    });
 
 $('#add-form').validate({
        rules: {
            email_pay: {
                email:true,
                required: true
            },
            forma: {
                required: true,
            },
            nombre_pay: {
                required: true,
            },
            monto: {
                required: true,
            },
            tipoplan: {
                required: true,
            },
           defaultReals: {
                required: true,
                remote: {
                    url:  base_url+"h/checkCaptchap",
                    type: 'POST',
                }
            },
            datetimepickers:{
				 required: true
			}

        },
        messages: {

            email_pay: {
                required: "Campo requerido."
            },
            forma: {
                required: "Campo requerido."
            },
            nombre_pay: {
                required: "Campo requerido."
            },
            monto: {
                required: "Campo requerido."
            },
			defaultReals:{
				required: "Campo requerido.",
				remote: "No coinciden"
			},
			datetimepickers:{
				required: "Campo requerido."
			}

        },
        errorClass: "valid-g",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').removeClass('has-error');
            $(element).parents('.valid-g').addClass('success');
        },
        showErrors: function(errorMap, errorList) {

            $.each(this.validElements(), function(index, element) {
                var $element = $(element);
                $element.parents('.valid-g').removeClass("has-error")
                var de = "#" + $element.attr("name");
                $(de).tooltip("destroy");
            });

            $.each(errorMap, function(key, value) {
                $("#" + key).parents('.valid-g').addClass('has-error');
                //$("#" + key).tooltip("destroy").tooltip({"animation": true, "placement": "right", "trigger": "focus", "title": value});
            });
        },
        //aqui es el funcionamiento del boton guardar
        submitHandler: function(form) {

            $.ajax({
                type: "POST",

                url: base_url+"h/addpaymet",
                data: $('#add-form').serialize(),

                success: function(msg) {
                    var a = msg.trim();

                    if (a == 'true' || a == true) {
                        $('#add-form').hide();
                        $('#btnPay').hide();
                        $('#msgSuccess').show();
                    }
                },

                error: function(msg) {
                    alert("Error");
                }
            });

        }
    });
    

      $('#add-user-form').validate({
        rules: {
            email: {
                email:true,
                required: true,
                remote: {
                    url:  base_url+"h/checkEmail",
                    type: 'POST',
                }
            },
            password: { required: true, minlength: 6, maxlength: 15, pwcheck:true },
            repassword: { required: true, minlength: 6, equalTo: '#passwords' },
            ciudad: {
                required: true,
            },
            nombre: {
                required: true,
            },
            apellido: {
                required: true,
            },
            captcha: {
                required: true,
				remote: {
                    url:  base_url+"h/verifyCaptcha",
                    type: 'POST',
                }
            },
			temrinos:{
				 required: true
			}
            

        },
        messages: {
            defaultReal: {
                required: "Campo requerido."
            },
            email: {
                required: "Campo requerido.",
                email:"Ingrese un email valido",
                remote:"El email ya esta registrado"
            },
            forma: {
                required: "Campo requerido."
            },
            nombre: {
                required: "Campo requerido."
            },
            apellido: {
                required: "Campo requerido."
            },
            ciudad: {
                required: "Campo requerido."
            },
            password: {
                required: "Campo requerido.",
				minlength:"No debe ser menos de 6 caracteres",
				maxlength:"No debe ser mas de 15 caracteres",
				pwcheck: "debe contener al menor un numero"
            },
            repassword: {
                required: "Campo requerido.",
                equalTo: "Las contrase;as no coinciden"
            },
            captcha: {
                required: "Campo requerido.",
				 remote:"No coincide"
            },
			temrinos:{
				 required: "."
			}

        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').addClass('has-error');

        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.valid-g').removeClass('has-error');
            $(element).parents('.valid-g').addClass('success');
        },
        /*showErrors: function(errorMap, errorList) {

            $.each(this.validElements(), function(index, element) {
                var $element = $(element);
                $element.parents('.valid-g').removeClass("has-error")
                var de = "#" + $element.attr("name");
                $(de).tooltip("destroy");
            });

            $.each(errorMap, function(key, value) {
                $("#" + key).parents('.valid-g').addClass('has-error');
               // $("#" + key).tooltip("destroy").tooltip({"animation": true, "placement": "right", "trigger": "focus", "title": value});
            });
        },*/
        //aqui es el funcionamiento del boton guardar
        submitHandler: function(form) {

            $.ajax({
                type: "POST",
                url: base_url+"h/addUser",
                data: $('#add-user-form').serialize(),
                success: function(msg) {
                    var a = msg.trim();

                    if (a == 'true' || a == true) {
                        $('#add-user-form').hide();
                        $('#success-user-form').show();
                       // window.location.href = base_url+"h/dashboard";
                    }
                },
                error: function(msg) {
                    alert("Error");
                }
            });

        }
    });