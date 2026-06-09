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
        {"@type": "ListItem", "position": 2, "name": "Directorio", "item": "https://plazauniversidad.com.mx/directorio.php"}
    ]
}
</script>

<!-- HERO DIRECTORIO -->
<section class="relative pt-28 md:pt-40 pb-12 md:pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-6 text-center">
        <nav aria-label="Breadcrumb" class="mb-4">
            <ol class="flex justify-center gap-2 text-xs text-gray-400">
                <li><a href="index.php" class="hover:text-plaza-purple transition-colors">Inicio</a></li>
                <li aria-hidden="true">/</li>
                <li aria-current="page" class="text-plaza-black font-bold">Directorio</li>
            </ol>
        </nav>
        <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Directorio</span>
        <h1 class="text-4xl md:text-7xl font-serif text-plaza-black mb-4 md:mb-8">Directorio de Tiendas de Plaza Universidad</h1>
        <p class="text-gray-400 font-sans font-light max-w-xl mx-auto text-sm md:text-lg">
            Descubre todas las tiendas, restaurantes y experiencias que Plaza Universidad tiene para ti.
        </p>
    </div>
</section>

<!-- FILTROS Y DIRECTORIO -->
<section class="pb-20 md:pb-32 bg-white min-h-screen">
    <div class="container mx-auto px-4 md:px-6">

        <!-- Filter Bar -->
        <div class="sticky top-16 md:top-24 z-30 bg-white/95 backdrop-blur-md py-4 md:py-6 mb-8 md:mb-16 border-b border-gray-100 transition-all duration-300">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 md:gap-6">
                <!-- Category Filter (connects to backend AJAX) -->
                <div class="flex flex-wrap justify-center gap-4 md:gap-8">
                    <label for="filtro-categoria" class="sr-only">Filtrar por categoría</label>
                <select id="filtro-categoria" class="giroComercial bg-transparent border border-gray-200 rounded-full px-4 md:px-6 py-2 text-xs font-bold uppercase tracking-[0.15em] text-plaza-black focus:outline-none focus:border-plaza-gold transition-colors cursor-pointer" aria-label="Filtrar tiendas por categoría">
                        <option value="">Todas las categorías</option>
                        <?php
                            $giros = giroComercial($CentroComercial);
                            echo $giros;
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Store Directory (loaded from backend DB) -->
        <div id="iconLocal" role="list" aria-label="Directorio de tiendas">
            <?php
                $directorio = directorioCC2($CentroComercial, '');
                echo $directorio;
            ?>
        </div>

    </div>
</section>

<script>
    $(document).ready(function () {
        // Click on store -> load modal via AJAX
        $('.local').on("click", function (e) {
            var _href = this.href;
            var _url = _href;
            e.preventDefault();
            $('#miModalContenidoLocatario').load(_url, function () {
                $('#miModalLocatario').modal({}, 'show');
            });
            return false;
        });

        // Category filter change -> reload directory via AJAX
        $('.giroComercial').change(function(){
            var giroComercial = $(this).val();
            $.ajax({
                url: 'filtroGiroComercialLocal.php',
                type: 'POST',
                data: {
                    giroComercial: giroComercial,
                    centroComercial: <?php echo $CentroComercial; ?>
                },
                cache: false,
                success: function(data){
                    if(data == 'error'){
                        $("#iconLocal").html("Error al cargar el directorio");
                    } else {
                        $("#iconLocal").html(data);
                    }
                }
            });
        });
    });
</script>

<?php
include("footer.php");
include("modales.php");
?>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>
