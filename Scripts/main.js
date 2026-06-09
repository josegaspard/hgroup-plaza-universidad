$(document).ready(function() {

    // ===== CONTACT FORM VALIDATION & SUBMISSION (backend integration) =====
    if ($('#formulario').length) {
        $('#formulario').validate({
            rules: {
                tipoMensaje: "required",
                NombreContacto: "required",
                EmailContacto: {
                    required: true,
                    email: true
                },
                TelefonoContacto: {
                    required: true,
                    number: true
                },
                Mensaje: "required"
            },
            errorElement: "span",
            messages: {
                tipoMensaje: "Seleccione una opción.",
                NombreContacto: "Ingresa un nombre.",
                EmailContacto: "Ingresa un correo electrónico.",
                TelefonoContacto: "Ingresa un teléfono.",
                Mensaje: "Ingresa un mensaje."
            },
            submitHandler: function(form) {
                var dataparam = new FormData($("#formulario")[0]);
                $.ajax({
                    url: 'enviarCorreo.php',
                    type: 'POST',
                    data: dataparam,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        $('#form-submit').text('Enviando...').prop('disabled', true);
                    },
                    success: function(data){
                        $('#formulario').html('<div class="text-center py-12"><i class="fas fa-check-circle text-4xl text-plaza-gold mb-4"></i><p class="text-xl font-serif text-plaza-black">Mensaje enviado correctamente</p><p class="text-gray-400 text-sm mt-2">Nos pondremos en contacto contigo pronto.</p></div>');
                    },
                    error: function(){
                        $('#formulario').html('<div class="text-center py-12"><i class="fas fa-times-circle text-4xl text-red-500 mb-4"></i><p class="text-xl font-serif text-plaza-black">Error al enviar</p><p class="text-gray-400 text-sm mt-2">Por favor intenta nuevamente.</p></div>');
                    }
                });
            }
        });
    }

    // ===== DIRECTORY FILTER (static HTML pages - directorio.html) =====
    $('.filter-btn').click(function () {
        var category = $(this).data('category');

        $('.filter-btn').removeClass('text-plaza-purple active-filter').addClass('text-gray-400');
        $('.filter-btn span').addClass('hidden');

        $(this).removeClass('text-gray-400').addClass('text-plaza-purple active-filter');
        $(this).find('span').removeClass('hidden');

        if (category == 'all') {
            $('#stores-grid > div').fadeIn(300);
        } else if (category == 'Variedad') {
            $('#stores-grid > div').each(function () {
                var itemCat = $(this).data('category');
                if (itemCat !== 'Moda' && itemCat !== 'Gastronomía') {
                    $(this).fadeIn(300);
                } else {
                    $(this).fadeOut(300);
                }
            });
        } else {
            $('#stores-grid > div').each(function () {
                var itemCat = $(this).data('category');
                if (itemCat === category) {
                    $(this).fadeIn(300);
                } else {
                    $(this).fadeOut(300);
                }
            });
        }
    });

    // ===== SEARCH (static HTML pages) =====
    $('#search-store').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#stores-grid > div').filter(function () {
            var title = $(this).find('h3').text().toLowerCase();
            $(this).toggle(title.indexOf(value) > -1);
        });
    });

});
