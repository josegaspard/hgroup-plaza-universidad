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
        'Entretenimiento': [],
        'Gastronomía': ['Cafeterías', 'Fast food', 'Restaurantes', 'Snacks'],
        'Retail / Tiendas': ['Beauty & wellness', 'Casa', 'Departamentales', 'Joyería', 'Moda y estilo'],
        'Servicios': ['Bancos'],
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
        $('.dir-cat').removeClass('dir-open');
    }
    $('.filter-btn').click(function () { _dirApplyFilter($(this).data('category')); });

    // Desplegable de subcategorías: en escritorio aparece al pasar el cursor;
    // en pantallas táctiles se abre/cierra al tocar la categoría padre.
    $('.dir-parent').on('click', function () {
        var $c = $(this).closest('.dir-cat');
        var open = $c.hasClass('dir-open');
        $('.dir-cat').removeClass('dir-open');
        if (!open) $c.addClass('dir-open');
    });
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.dir-cat').length) $('.dir-cat').removeClass('dir-open');
    });

    // El desplegable va centrado en su pestaña; si la pestaña queda cerca de un borde
    // se saldría de la pantalla (y en móvil generaba scroll horizontal aun estando cerrado,
    // porque usa visibility:hidden y sigue ocupando espacio). Lo empujamos hacia dentro.
    function _dirClampDrops() {
        var margen = 8, vw = document.documentElement.clientWidth;
        $('.dir-drop').each(function () {
            var $d = $(this);
            $d.css('margin-left', 0);
            var r = this.getBoundingClientRect();
            var ajuste = 0;
            if (r.right > vw - margen) ajuste = -(r.right - (vw - margen));
            else if (r.left < margen) ajuste = margen - r.left;
            if (ajuste) $d.css('margin-left', Math.round(ajuste) + 'px');
        });
    }
    if ($('.dir-drop').length) {
        _dirClampDrops();
        $(window).on('resize orientationchange', _dirClampDrops);
        $('.dir-cat').on('mouseenter click', _dirClampDrops);
    }

    // Deep-link de categoría desde el menú: directorio.html?cat=Nombre
    if ($('#stores-grid').length) {
        var _dirCat = new URLSearchParams(location.search).get('cat');
        if (_dirCat) _dirApplyFilter(_dirCat);
    }

    // ===== SEARCH (directorio.html) =====
    // Sin acentos: "turin" encuentra "Chocolates Turín", "cinepolis" -> "Cinépolis", etc.
    function _dirNorm(s) {
        return String(s).toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }
    $('#search-store').on('keyup', function () {
        var value = _dirNorm($(this).val());
        $('#stores-grid > div').each(function () {
            var name = _dirNorm($(this).find('img.store-card-logo').attr('alt')
                || $(this).find('.store-card-name').text()
                || $(this).text());
            $(this).toggle(name.indexOf(value) > -1);
        });
    });

});
