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
        {"@type": "ListItem", "position": 2, "name": "Mapa", "item": "https://plazauniversidad.com.mx/mapa.php"}
    ]
}
</script>

<style>
    .locatarios {
        columns: 2;
        -webkit-columns: 2;
        -moz-columns: 2;
        list-style: none;
    }
</style>

<div class="bg-white min-h-screen">
    <!-- Header -->
    <section class="relative pt-28 md:pt-40 pb-12 md:pb-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <nav aria-label="Breadcrumb" class="mb-4">
                <ol class="flex justify-center gap-2 text-xs text-gray-400">
                    <li><a href="index.php" class="hover:text-plaza-purple transition-colors">Inicio</a></li>
                    <li aria-hidden="true">/</li>
                    <li aria-current="page" class="text-plaza-black font-bold">Mapa</li>
                </ol>
            </nav>
            <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Mapa Interactivo</span>
            <h1 class="text-4xl md:text-7xl font-serif text-plaza-black mb-4 md:mb-8">Mapa de Locales de Plaza Universidad</h1>
            <p class="text-gray-400 font-sans font-light max-w-xl mx-auto text-sm md:text-lg">
                Ubica tus tiendas favoritas en nuestro mapa interactivo por piso.
            </p>
        </div>
    </section>

    <!-- Map Content -->
    <div class="container mx-auto px-4 md:px-6 pb-20 md:pb-32">
        <input type="hidden" class="count" value="0"/>
        <div id="divMapa" class="container">

            <!-- Category Filter (backend populates options) -->
            <?php
                echo giroComercial($CentroComercial);
            ?>

            <!-- Floor Tabs - Desktop -->
            <div class="row visible-lg visible-md visible-sm">
                <ul class="nav nav-tabs txtSubTituloMapa">
                    <li class="active">
                        <a href="#tab_1" data-toggle="tab" aria-expanded="true">Planta Baja</a>
                    </li>
                    <li class="">
                        <a href="#tab_2" data-toggle="tab" aria-expanded="false">Segundo Piso</a>
                    </li>
                </ul>
            </div>

            <!-- Floor Tabs - Mobile -->
            <div class="row visible-xs">
                <ul class="nav nav-tabs txtSubTituloMapaXS">
                    <li class="active">
                        <a href="#tab_1" data-toggle="tab">Planta Baja</a>
                    </li>
                    <li>
                        <a href="#tab_2" data-toggle="tab">Segundo Piso</a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="tabContent">

                <!-- Planta Baja -->
                <div class="tab-pane active in" id="tab_1">
                    <div class="row">
                        <div class="col-md-10" id="mapa" style="margin:0 auto">
                            <div id="svg-container">
                                <br>
                                <!-- SVG del mapa de Planta Baja de Plaza Universidad se inserta aqui -->
                                <!-- El equipo de sistemas debe colocar el SVG con los poligonos .localP -->
                                <div class="text-center py-20 text-gray-400">
                                    <i class="fas fa-map-marked-alt text-6xl mb-4 block text-gray-200"></i>
                                    <p class="font-bold uppercase tracking-widest text-sm">SVG Mapa Planta Baja</p>
                                    <p class="text-xs mt-2">Pendiente: insertar SVG interactivo de Plaza Universidad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="PlantaBaja">
                            <?php
                                $locatariosPB = locatariosMapa2PRB($CentroComercial, '', 'Planta Baja');
                                echo $locatariosPB;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Segundo Piso -->
                <div class="tab-pane" id="tab_2">
                    <div class="row">
                        <div class="col-md-10" id="mapa2" style="margin:0 auto">
                            <div id="svg-container2">
                                <br>
                                <!-- SVG del mapa de Segundo Piso de Plaza Universidad se inserta aqui -->
                                <div class="text-center py-20 text-gray-400">
                                    <i class="fas fa-map-marked-alt text-6xl mb-4 block text-gray-200"></i>
                                    <p class="font-bold uppercase tracking-widest text-sm">SVG Mapa Segundo Piso</p>
                                    <p class="text-xs mt-2">Pendiente: insertar SVG interactivo de Plaza Universidad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="PlantaAlta">
                            <?php
                                $locatariosPA = locatariosMapa2PRB($CentroComercial, '', 'Planta Alta');
                                echo $locatariosPA;
                            ?>
                        </div>
                    </div>
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
<script src="Scripts/logoLocatario.js"></script>
<script>
    $(document).ready(function () {
        // Store list hover -> highlight SVG polygon
        $('.local').mouseenter(function () {
            var id = $(this).attr("id");
            var idMapa = id.replace("D", "");
            var color = $("#" + idMapa).css("fill");
            $("#" + idMapa).css("fill-opacity", ".5");
            $("#" + id).css({'background': color, 'font-weight': 'bold', 'color': 'white'});
        });

        $('.local').mouseleave(function () {
            var id = $(this).attr("id");
            var idMapa = id.replace("D", "");
            $("#" + idMapa).css("fill-opacity", "1");
            $("#" + id).css({'background': 'none', 'font-weight': 'normal', 'color': 'black'});
        });

        // Store list click -> open modal via AJAX
        $('.local').on("click", function (e) {
            var _href = this.href;
            var _url = _href;
            e.preventDefault();
            $('#miModalContenidoLocatario').load(_url, function () {
                $('#miModalLocatario').modal({}, 'show');
            });
            return false;
        });

        // SVG polygon hover
        $(".localP").mouseenter(function () {
            var id = $(this).attr("id");
            var color = $("#local" + id).css("fill");
            $("#local" + id).css("fill-opacity", ".5");
            $("#Dlocal" + id).css({'background': color, 'font-weight': 'bold', 'color': 'white'});
        });

        $(".localP").mouseleave(function () {
            var id = $(this).attr("id");
            $("#local" + id).css("fill-opacity", "1");
            $("#Dlocal" + id).css({'background': 'none', 'font-weight': 'normal', 'color': 'black'});
        });

        // SVG polygon click -> open modal
        $(".localP").click(function () {
            var id = $(this).attr("id");
            id = id.replace("PlantaBaja", "").replace("PlantaAlta", "");
            var centroComercial = <?php echo $CentroComercial; ?>;
            $('#miModalContenidoLocatario').load("locatarioModal.php?CentroComercial=" + centroComercial + "&idCatLocatario=" + id + "&origen=mapa", function () {
                $('#miModalLocatario').modal({}, 'show');
            });
            return false;
        });

        // Category filter -> AJAX reload both floors
        $('.giroComercial').change(function(){
            var giroComercial = $(this).val();
            $.ajax({
                url: 'listadoLocatarios.php',
                type: 'POST',
                data: {centroComercial: <?php echo $CentroComercial; ?>, giroComercial: giroComercial, piso: 'Planta Baja'},
                cache: false,
                success: function(data){
                    if(data == 'error'){
                        $("#PlantaBaja").html("error");
                    } else {
                        $("#PlantaBaja").html(data);
                    }
                }
            });
            $.ajax({
                url: 'listadoLocatarios.php',
                type: 'POST',
                data: {centroComercial: <?php echo $CentroComercial; ?>, giroComercial: giroComercial, piso: 'Planta Alta'},
                cache: false,
                success: function(data){
                    if(data == 'error'){
                        $("#PlantaAlta").html("error");
                    } else {
                        $("#PlantaAlta").html(data);
                    }
                }
            });
        });
    });
</script>
