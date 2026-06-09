<?php
include("header.php");
include("menu.php");
?>

<!-- BreadcrumbList Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Inicio",
        "item": "https://plazauniversidad.com.mx/"
    }]
}
</script>

<!-- HERO SECTION -->
<section class="relative h-[85vh] md:h-screen w-full overflow-hidden flex items-center justify-center bg-plaza-black">
    <img src="images/locales/Exteriores%20de%20plaza.jpg"
        class="absolute inset-0 w-full h-full object-cover opacity-55"
        alt="Fachada exterior de Plaza Universidad, centro comercial en el sur de la Ciudad de México"
        loading="eager" width="1920" height="1080">

    <div class="absolute inset-0 bg-black/35"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-black/30"></div>

    <div class="relative z-10 text-center px-4 md:px-6 max-w-4xl mx-auto flex flex-col items-center fade-in-up py-10 md:py-20">
        <div class="mb-8 md:mb-12">
            <span class="block text-white/80 text-[10px] md:text-xs uppercase tracking-[0.3em] md:tracking-[0.5em] mb-3 md:mb-4">Est. 1969</span>
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-serif text-white tracking-tight leading-tight drop-shadow-xl opacity-95">
                Plaza Universidad <br><span class="font-light text-plaza-gold">Centro Comercial en CDMX</span>
            </h1>
        </div>

        <p class="text-white/80 text-[10px] md:text-sm font-sans uppercase tracking-[0.2em] md:tracking-[0.3em] mb-10 md:mb-16 font-light border-t border-white/20 pt-6 md:pt-8 mt-2 md:mt-4 px-4 md:px-12 max-w-lg mx-auto">
            Moda, gastronomía, entretenimiento y servicios en un solo lugar
        </p>

        <a href="directorio.php"
            class="group relative inline-block overflow-hidden rounded-sm bg-transparent px-10 md:px-14 py-3 md:py-4 text-white hover:text-plaza-black transition-colors duration-500 border border-white/40 hover:bg-white hover:border-white"
            aria-label="Explorar el directorio de tiendas de Plaza Universidad">
            <span class="relative z-10 text-[10px] md:text-xs font-bold uppercase tracking-[0.3em] transition-colors duration-500">
                Descubrir
            </span>
        </a>
    </div>
</section>

<!-- QUICK LINKS & MAP -->
<section class="relative z-20 -mt-12 md:-mt-20 px-4 md:px-6 pb-12 md:pb-20" aria-label="Accesos rápidos">
    <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-2 gap-3 md:gap-6 max-w-4xl mx-auto">

            <a href="directorio.php"
                class="group bg-white p-5 md:p-10 shadow-2xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-plaza-gold flex flex-col items-center text-center"
                aria-label="Ver directorio de tiendas">
                <div class="h-8 w-8 mb-3 md:mb-6 text-plaza-black group-hover:text-plaza-gold transition-colors" aria-hidden="true">
                    <i class="fas fa-store text-2xl md:text-3xl"></i>
                </div>
                <h2 class="text-base md:text-xl font-serif text-plaza-black mb-1 md:mb-2">Tiendas</h2>
                <p class="text-[9px] md:text-[10px] font-sans uppercase tracking-[0.15em] md:tracking-[0.2em] text-gray-400 group-hover:text-plaza-gold transition-colors">
                    Explorar Directorio</p>
            </a>

            <a href="mapa.php"
                class="group bg-plaza-black p-5 md:p-10 shadow-2xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-white/20 flex flex-col items-center text-center"
                aria-label="Ver mapa interactivo de la plaza">
                <div class="h-8 w-8 mb-3 md:mb-6 text-white group-hover:text-plaza-gold transition-colors" aria-hidden="true">
                    <i class="fas fa-map text-2xl md:text-3xl"></i>
                </div>
                <h2 class="text-base md:text-xl font-serif text-white mb-1 md:mb-2">Mapa del Centro</h2>
                <p class="text-[9px] md:text-[10px] font-sans uppercase tracking-[0.15em] md:tracking-[0.2em] text-gray-400 group-hover:text-plaza-gold transition-colors">
                    Ver Ubicaciones</p>
            </a>
        </div>
    </div>
</section>

<!-- QUICK DIRECTORY BANNER -->
<section class="py-10 md:py-16 bg-gray-50 border-t border-gray-100" aria-label="Directorio rápido de tiendas">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 md:mb-10 gap-3 md:gap-4">
            <div>
                <span class="text-plaza-gold text-xs font-bold uppercase tracking-[0.2em] block mb-1 md:mb-2">Directorio Rápido</span>
                <h2 class="text-2xl md:text-3xl font-serif text-plaza-black">Nuestras Tiendas</h2>
            </div>
            <a href="directorio.php"
                class="text-[10px] md:text-xs font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-plaza-black transition-colors">Ver Directorio Completo →</a>
        </div>

        <!-- Backend dynamic directory listing -->
        <div id="iconLocal" role="list" aria-label="Lista de tiendas">
            <?php
                $directorio = directorioCC2($CentroComercial, '');
                echo $directorio;
            ?>
        </div>

        <!-- Espacios disponibles -->
        <aside class="border-t border-gray-200 pt-6 md:pt-10 mt-6 md:mt-4">
            <div class="bg-white border border-gray-200 rounded-sm p-5 md:p-8 max-w-2xl mx-auto text-center shadow-sm">
                <span class="text-plaza-gold text-[9px] md:text-[10px] font-bold uppercase tracking-[0.2em] md:tracking-[0.3em] block mb-2 md:mb-3">Espacios Disponibles</span>
                <h3 class="text-xl md:text-2xl font-serif text-plaza-black mb-2 md:mb-3">¿Quieres abrir tu negocio aquí?</h3>
                <p class="text-gray-500 font-light mb-4 md:mb-6 text-xs md:text-sm leading-relaxed">Contamos con locales comerciales disponibles en distintos niveles. Contáctanos para recibir información sobre renta de espacios.</p>
                <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap justify-center sm:gap-4">
                    <a href="tel:5554741430"
                        class="flex items-center justify-center gap-2 text-sm text-plaza-black hover:text-plaza-gold transition-colors font-medium">
                        <i class="fas fa-phone text-plaza-gold" aria-hidden="true"></i> (55) 5474 1430
                    </a>
                    <a href="tel:5554741680"
                        class="flex items-center justify-center gap-2 text-sm text-plaza-black hover:text-plaza-gold transition-colors font-medium">
                        <i class="fas fa-phone text-plaza-gold" aria-hidden="true"></i> (55) 5474 1680
                    </a>
                    <a href="mailto:informacion.comercial@incarso.com"
                        class="flex items-center justify-center gap-2 text-xs md:text-sm text-plaza-black hover:text-plaza-gold transition-colors font-medium break-all sm:break-normal">
                        <i class="fas fa-envelope text-plaza-gold shrink-0" aria-hidden="true"></i> informacion.comercial@incarso.com
                    </a>
                    <a href="contacto.php"
                        class="flex items-center justify-center gap-2 text-sm font-bold uppercase tracking-wider text-plaza-purple hover:text-plaza-gold transition-colors">
                        <i class="fas fa-arrow-right text-[10px]" aria-hidden="true"></i> Contactar ahora
                    </a>
                </div>
            </div>
        </aside>
    </div>
</section>

<!-- INTRO IMAGE -->
<section class="py-0 bg-white relative overflow-hidden" aria-label="Interior de Plaza Universidad">
    <figure class="w-full h-[40vh] md:h-[60vh] overflow-hidden relative m-0">
        <img src="images/locales/Segundo%20piso%20exteriores.jpg"
            class="w-full h-full object-cover transition-all duration-1000 hover:scale-105"
            alt="Vista del segundo piso y exteriores de Plaza Universidad con tiendas y pasillos iluminados"
            loading="lazy" width="1920" height="1080">
        <div class="absolute inset-0 bg-gradient-to-tl from-black/80 via-transparent to-transparent"></div>
        <figcaption class="absolute bottom-6 right-6 sm:bottom-10 sm:right-10 max-w-[260px] sm:max-w-xs">
            <div class="bg-black/60 backdrop-blur-sm border-l-4 border-plaza-gold p-5 sm:p-6">
                <p class="text-plaza-gold text-[9px] font-bold uppercase tracking-[0.3em] mb-2">Plaza Universidad</p>
                <h3 class="text-white font-serif text-xl sm:text-2xl leading-snug">
                    Tu próxima gran historia
                    <span class="text-plaza-gold font-light block">empieza aquí.</span>
                </h3>
            </div>
        </figcaption>
    </figure>
</section>

<!-- NEWSLETTER -->
<section class="py-14 md:py-24 bg-plaza-black text-white border-b border-gray-900" aria-label="Suscripción al boletín">
    <div class="container mx-auto px-4 md:px-6 text-center max-w-2xl">
        <h2 class="text-2xl md:text-3xl font-serif mb-4 md:mb-6">Plaza Universidad</h2>
        <p class="text-gray-400 font-sans font-light mb-6 md:mb-10 text-sm">Suscríbete para recibir las últimas noticias y novedades de tu plaza.</p>
        <form class="flex border-b border-gray-700 pb-2" aria-label="Formulario de suscripción">
            <label for="newsletter-email" class="sr-only">Correo electrónico</label>
            <input type="email" id="newsletter-email" placeholder="Correo electrónico" autocomplete="email"
                class="bg-transparent w-full text-white placeholder-white/60 focus:outline-none font-sans font-light">
            <button type="button"
                class="text-xs font-bold uppercase tracking-[0.2em] text-plaza-gold hover:text-white transition-colors">Unirse</button>
        </form>
    </div>
</section>

<?php
include("footer.php");
include("modales.php");
?>

<script>
    $(document).ready(function () {
        $('.local').on("click", function (e) {
            var _href = this.href;
            var _url = _href;
            e.preventDefault();
            $('#miModalContenidoLocatario').load(_url, function () {
                $('#miModalLocatario').modal({}, 'show');
            });
            return false;
        });
    });
</script>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>
