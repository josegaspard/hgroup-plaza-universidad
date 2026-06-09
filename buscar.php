<?php
include("header.php");
include("menu.php");
?>

<section class="relative pt-28 md:pt-40 pb-12 md:pb-20 bg-white">
    <div class="container mx-auto px-4 md:px-6 text-center">
        <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] block mb-4 md:mb-6">Buscar</span>
        <h1 class="text-4xl md:text-7xl font-serif text-plaza-black mb-4 md:mb-8">Directorio</h1>
    </div>
</section>

<section class="pb-20 md:pb-32 bg-white min-h-screen">
    <div class="container mx-auto px-4 md:px-6">
        <input type="hidden" class="count" value="0"/>

        <div class="mb-8">
            <?php
                echo giroComercial($CentroComercial);
            ?>
        </div>

        <div id="iconLocal">
            <?php
                $directorioCC = directorioCC2($CentroComercial, '');
                echo $directorioCC;
            ?>
        </div>

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
            $('select').on('change', function() {
                var giroComercial = this.value;
                var centroComercial = <?php echo $CentroComercial; ?>;
                $.ajax({
                    url: 'filtroGiroComercialLocal.php',
                    type: 'POST',
                    data: {"giroComercial": giroComercial, "centroComercial": centroComercial},
                    beforeSend: function(){
                        $("#iconLocal").html("Cargando...");
                    },
                    success: function(response){
                        $("#iconLocal").html(response);
                    }
                });
            });
        });
        </script>
    </div>
</section>

<?php
include("footer.php");
include("modales.php");
?>
<script src="Scripts/jquery.validate.min.js"></script>
<script src="Scripts/main.js"></script>
