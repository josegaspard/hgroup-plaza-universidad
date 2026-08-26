<?php
include("header.php");
include("menu.php");
?>

<!-- BreadcrumbList + ContactPage Schema -->
<script type="application/ld+json">
[{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://plazauniversidad.com.mx/"},
        {"@type": "ListItem", "position": 2, "name": "Contacto", "item": "https://plazauniversidad.com.mx/contacto.php"}
    ]
},
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contacto - Plaza Universidad",
    "description": "Formulario de contacto, telefonos y ubicacion de Plaza Universidad en Av. Universidad 1000, CDMX.",
    "mainEntity": {
        "@type": "ShoppingCenter",
        "name": "Plaza Universidad",
        "telephone": ["+525554741430", "+525554741680"],
        "email": "informacion.comercial@incarso.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Universidad 1000",
            "addressLocality": "Benito Juarez",
            "addressRegion": "Ciudad de Mexico",
            "postalCode": "03310",
            "addressCountry": "MX"
        }
    }
}]
</script>

<div class="bg-white min-h-screen">
    <!-- HERO CONTACTO -->
    <section class="relative pt-28 md:pt-40 pb-12 md:pb-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <nav aria-label="Breadcrumb" class="mb-4">
                <ol class="flex justify-center gap-2 text-xs text-gray-400">
                    <li><a href="index.php" class="hover:text-plaza-purple transition-colors">Inicio</a></li>
                    <li aria-hidden="true">/</li>
                    <li aria-current="page" class="text-plaza-black font-bold">Contacto</li>
                </ol>
            </nav>
            <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Contacto</span>
            <h1 class="text-4xl md:text-7xl font-serif text-plaza-black mb-4 md:mb-8">Contacto Plaza Universidad</h1>
            <p class="text-gray-400 font-sans font-light max-w-xl mx-auto text-sm md:text-lg">
                Estamos a su disposición para cualquier requerimiento, duda o sugerencia.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 md:px-6 py-12 md:py-20 pb-20 md:pb-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20">

            <!-- FORM -->
            <div class="order-2 lg:order-1 fade-in-up">
                <h3 class="text-xl md:text-2xl font-serif text-plaza-black mb-6 md:mb-8">Cuéntanos tu experiencia</h3>

                <form id="formulario" class="space-y-8 md:space-y-12" aria-label="Formulario de contacto">
                    <!-- Comentario, Nombre y Email: los 3 campos que pidió el cliente (26-ago-2026) -->
                    <div class="group">
                        <textarea id="Mensaje" name="Mensaje" rows="2" placeholder="Comentario" aria-label="Comentario" class="w-full bg-transparent border-b border-gray-200 py-3 md:py-4 font-sans font-light text-plaza-black focus:outline-none focus:border-plaza-gold transition-colors placeholder-gray-300 resize-none h-auto min-h-[50px] text-sm md:text-base"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                        <div class="group">
                            <input id="NombreContacto" name="NombreContacto" type="text" placeholder="Nombre" aria-label="Nombre" class="w-full bg-transparent border-b border-gray-200 py-3 md:py-4 font-sans font-light text-plaza-black focus:outline-none focus:border-plaza-gold transition-colors placeholder-gray-300 text-sm md:text-base">
                        </div>
                        <div class="group">
                            <input id="EmailContacto" name="EmailContacto" type="email" placeholder="Email" aria-label="Email" class="w-full bg-transparent border-b border-gray-200 py-3 md:py-4 font-sans font-light text-plaza-black focus:outline-none focus:border-plaza-gold transition-colors placeholder-gray-300 text-sm md:text-base">
                        </div>
                    </div>

                    <!-- enviarCorreo.php sigue recibiendo los 7 campos: tipoMensaje=1 enruta al correo de la plaza -->
                    <input type="hidden" id="tipoMensaje" name="tipoMensaje" value="1">
                    <input type="hidden" id="TelefonoContacto" name="TelefonoContacto" value="">

                    <!-- Hidden Inputs (backend fills these) -->
                    <?php echo '<input id="EmailPlaza" name="EmailPlaza" type="hidden" value="' . emailCC($CentroComercial) . '">'; ?>
                    <?php echo '<input id="NombrePlaza" name="NombrePlaza" type="hidden" value="' . nombreCC($CentroComercial) . '">'; ?>

                    <button type="submit" id="form-submit"
                        class="group flex items-center gap-4 text-xs font-bold uppercase tracking-[0.2em] text-plaza-black hover:text-plaza-purple transition-colors mt-6 md:mt-8">
                        Enviar comentario
                        <span class="w-12 h-px bg-plaza-black group-hover:w-20 group-hover:bg-plaza-purple transition-all duration-300"></span>
                    </button>
                </form>
            </div>

            <!-- INFO & MAP -->
            <div class="order-1 lg:order-2 flex flex-col justify-between fade-in-up">
                <div class="mb-10 md:mb-16">
                    <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Ubicación</span>
                    <address class="not-italic text-gray-500 font-sans font-light leading-loose text-base md:text-lg">
                        Av. Universidad 1000<br>
                        Col. Santa Cruz Atoyac<br>
                        Benito Juárez, CDMX 03310
                    </address>
                    <div class="mt-6 md:mt-8 flex flex-col gap-2">
                        <a href="tel:5554741430"
                            class="text-plaza-black hover:text-plaza-gold transition-colors font-serif text-lg md:text-xl">Tel: (55) 5474 1430</a>
                        <a href="tel:5554741680"
                            class="text-plaza-black hover:text-plaza-gold transition-colors font-serif text-lg md:text-xl">Tel: (55) 5474 1680</a>
                        <a href="mailto:informacion.comercial@incarso.com"
                            class="text-gray-400 hover:text-plaza-black transition-colors font-sans font-light text-sm break-all sm:break-normal">informacion.comercial@incarso.com</a>
                    </div>
                </div>

                <!-- Google Maps - PLAZA UNIVERSIDAD (Av. Universidad 1000, Santa Cruz Atoyac, CDMX) -->
                <div class="h-[250px] md:h-[400px] w-full bg-gray-100 relative">
                    <iframe title="Ubicación de Plaza Universidad en Google Maps"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3042075284407!2d-99.17076122536512!3d19.359638981893936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff8e42d5dc53%3A0x7c5b8d2c5f1e4c0a!2sPlaza%20Universidad!5e0!3m2!1ses-419!2smx!4v1712345678901!5m2!1ses-419!2smx"
                        class="absolute inset-0 w-full h-full" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include("footer.php");
include("modales.php");
?>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>
