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

    // ===== DIRECTORY FILTER + TAXONOMÍA (directorio.html) =====
    // Cada card tiene data-category = subcategoría (hoja). Filtrar por una
    // categoría PADRE incluye todas sus subcategorías.
    var DIR_CATS = {
        'Entretenimiento': [], 'Fitness': [],
        'Gastronomía': ['Cafeterías', 'Fast food', 'Restaurantes', 'Snacks', 'Vinos y licores'],
        'Retail / Tiendas': ['Beauty & wellness', 'Citymarket', 'Departamentales', 'Joyería', 'Moda y estilo'],
        'Servicios': ['Bancos', 'Escuelas', 'Inmobiliarias y agencias'],
        'Telefonía y Tecnología': ['Automotriz', 'Tecnología', 'Telefonía']
    };
    function _dirCatMatch(itemCat, active) {
        if (active === 'all') return true;
        if (itemCat === active) return true;
        var subs = DIR_CATS[active];
        return subs ? subs.indexOf(itemCat) >= 0 : false;
    }
    function _dirApplyFilter(category) {
        $('.filter-btn').removeClass('text-plaza-purple active-filter').addClass('text-gray-400');
        $('.filter-btn span').addClass('hidden');
        var $btn = $('.filter-btn').filter(function () { return String($(this).data('category')) === String(category); });
        if ($btn.length) {
            $btn.removeClass('text-gray-400').addClass('text-plaza-purple active-filter');
            $btn.find('span').removeClass('hidden');
        }
        $('#stores-grid > div').each(function () {
            if (_dirCatMatch(String($(this).data('category')), category)) $(this).fadeIn(200); else $(this).hide();
        });
    }
    $('.filter-btn').click(function () { _dirApplyFilter($(this).data('category')); });

    // Deep-link de categoría desde el menú: directorio.html?cat=Nombre
    if ($('#stores-grid').length) {
        var _dirCat = new URLSearchParams(location.search).get('cat');
        if (_dirCat) _dirApplyFilter(_dirCat);
    }

    // ===== SEARCH (directorio.html) =====
    $('#search-store').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('#stores-grid > div').each(function () {
            var name = ($(this).find('img.store-card-logo').attr('alt')
                || $(this).find('.store-card-name').text()
                || $(this).text()).toLowerCase();
            $(this).toggle(name.indexOf(value) > -1);
        });
    });

});
