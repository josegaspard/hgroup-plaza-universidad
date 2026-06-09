<?php
include("header.php");
include("menu.php");
?>

<!-- BreadcrumbList Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://plazauniversidad.com.mx/"},
        {"@type": "ListItem", "position": 2, "name": "Eventos y Promociones", "item": "https://plazauniversidad.com.mx/eventosypromociones.php"}
    ]
}
</script>

<!-- HERO EVENTOS -->
<section class="relative pt-28 md:pt-40 pb-12 md:pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-6 text-center">
        <nav aria-label="Breadcrumb" class="mb-4">
            <ol class="flex justify-center gap-2 text-xs text-gray-400">
                <li><a href="index.php" class="hover:text-plaza-purple transition-colors">Inicio</a></li>
                <li aria-hidden="true">/</li>
                <li aria-current="page" class="text-plaza-black font-bold">Eventos y Promociones</li>
            </ol>
        </nav>
        <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Novedades</span>
        <h1 class="text-4xl md:text-7xl font-serif text-plaza-black mb-4 md:mb-8">Eventos y Promociones en Plaza Universidad</h1>
        <p class="text-gray-400 font-sans font-light max-w-xl mx-auto text-sm md:text-lg">
            Descubre los eventos, ofertas y promociones que Plaza Universidad tiene para ti.
        </p>
    </div>
</section>

<!-- PUBLICACIONES (loaded from backend DB) -->
<section class="pb-20 md:pb-32 bg-white min-h-screen">
    <div class="container mx-auto px-4 md:px-6">
        <div id="publicaciones">
            <?php
                $publicaciones = publicaciones($CentroComercial);
                echo $publicaciones;
            ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        // Click on promotion -> load modal via AJAX
        $('.publicidad').on("click", function (e) {
            var _href = this.href;
            var _url = _href;
            e.preventDefault();
            $('#miModalContenidoPublicidad').load(_url, function () {
                $('#miModalPublicidad').modal({}, 'show');
            });
            return false;
        });
    });
</script>

<?php
include("footer.php");
include("modales.php");
?>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>
