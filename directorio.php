<?php
include("header.php");
include("menu.php");
?>

<!-- HERO DIRECTORIO -->
<section class="relative h-[60vh] w-full overflow-hidden flex items-center justify-center bg-carso-black mt-20">
    <div class="absolute inset-0 z-0">
        <img src="https://centrourbano.com/revista/wp-content/uploads/Garden-Santa-Fe-2.jpg"
            class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-black/40"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
        <div class="inline-block mb-6">
            <span
                class="py-2 px-4 border-2 border-carso-brand text-carso-brand font-black text-xs uppercase tracking-[0.25em] backdrop-blur-sm">Directorio</span>
        </div>

        <h1
            class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-black text-white mb-6 leading-none tracking-tighter drop-shadow-2xl uppercase italic">
            Nuestras <span class="text-carso-brand">Tiendas</span>
        </h1>

        <p class="text-xl md:text-2xl text-gray-100 font-bold max-w-2xl mx-auto leading-relaxed">
            Encuentra tus marcas favoritas en un solo lugar
        </p>
    </div>
</section>

<!-- FILTROS Y DIRECTORIO -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row justify-between items-end mb-16 gap-8">
            <div>
                <h2 class="text-4xl md:text-5xl font-black text-carso-black mb-2 tracking-tighter uppercase italic">
                    Explora</h2>
                <p class="text-lg text-carso-brand font-bold uppercase tracking-widest">Más de 100 locales
                    disponibles</p>
            </div>

            <!-- Backend Hook: Formulario para filtrado (Adaptado de listadoLocatarios.php) -->
            <div class="w-full lg:w-auto flex flex-col md:flex-row gap-4">
                <div class="relative grow">
                    <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 text-lg"></i>
                    <input type="text" id="search-store" placeholder="Buscar tienda..."
                        class="w-full md:w-80 pl-12 pr-6 py-4 bg-white border-2 border-gray-100 rounded-xl font-bold text-carso-black focus:outline-none focus:border-carso-brand shadow-lg transition-colors">
                </div>
                <!-- 
                     Nota para Backend: El select tiene la clase 'giroComercial' para coincidir con la lógica original de JS/AJAX 
                     si se desea reutilizar dicho script.
                -->
                <select id="filter-category" name="giroComercial"
                    class="giroComercial px-6 py-4 bg-white border-2 border-gray-100 rounded-xl font-bold text-carso-black focus:outline-none cursor-pointer shadow-lg">
                    <option value="all">Todas las Categorías</option>
                    <option value="Moda">Moda</option>
                    <option value="Tecnología">Tecnología</option>
                    <option value="Alimentos">Gastronomía</option>
                    <option value="Entretenimiento">Entretenimiento</option>
                    <option value="Servicios">Servicios</option>
                </select>
            </div>
        </div>

        <!-- LISTADO DE TIENDAS -->
        <!-- 
             IMPORTANTE PARA INTEGRACIÓN BACKEND:
             El código original usaba: 
             $locatariosMapa = locatariosMapa2PRB($CentroComercial, $giroComercial, $piso);
             echo $locatariosMapa;
             
             Para mantener este diseño nuevo, la función 'locatariosMapa2PRB' en 'conexion.php' debe actualizarse 
             para generar el siguiente HTML para cada ítem:
        -->

        <div id="stores-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <?php
            // BLOQUE DE INTEGRACIÓN (Descomentar y ajustar cuando se actualice la función backend)
            /*
            $CentroComercial = $_POST['centroComercial'] ?? $CentroComercial; // Usar global o post
            $giroComercial = $_POST['giroComercial'] ?? '';
            $piso = 'Planta Alta/Baja'; // Ajustar según lógica

            // Opción A: Si la función devuelve HTML ya formateado con este nuevo diseño:
            // echo locatariosMapa2PRB($CentroComercial, $giroComercial, $piso);

            // Opción B: Si se cambia la función para devolver un ARRAY de datos (Recomendado):
            // $locatarios = obtenerLocatariosArray($CentroComercial);
            // foreach($locatarios as $store) {
            //    include 'template_store_item.php'; // O el HTML de abajo
            // }
            */
            ?>

            <!-- EJEMPLO DE ESTRUCTURA HTML REQUERIDA (STATIC DEMO) -->
            <div onclick="openDirectoryModal('Sears', 'Moda', 'https://imagenes.eleconomista.com.mx/files/webp_768_448/uploads/2022/05/23/66e82cf740290.jpeg', 'Tienda departamental líder en moda, hogar y tecnología.', 'Planta Baja', '10:00 - 21:00')"
                class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-all cursor-pointer">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://imagenes.eleconomista.com.mx/files/webp_768_448/uploads/2022/05/23/66e82cf740290.jpeg"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div
                        class="absolute top-3 right-3 bg-white text-[9px] font-black px-2 py-1 rounded shadow-sm text-black uppercase tracking-widest">
                        PB</div>
                </div>
                <div class="p-6">
                    <span
                        class="text-[9px] font-black text-carso-brand uppercase tracking-widest block mb-2">Moda</span>
                    <h3
                        class="text-xl font-black text-carso-black uppercase group-hover:text-carso-brand transition-colors mb-2">
                        Sears</h3>
                    <p class="text-xs text-gray-500 font-bold mb-4"><i class="far fa-clock mr-1"></i>10:00 - 21:00</p>
                    <button
                        class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-transparent group-hover:border-carso-brand group-hover:text-carso-brand transition-all">Ver
                        Detalles</button>
                </div>
            </div>

            <!-- Más ítems estáticos para demo visual... -->
            <div
                class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-all cursor-pointer">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://centrourbano.com/revista/wp-content/uploads/Garden-Santa-Fe-2.jpg"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div
                        class="absolute top-3 right-3 bg-white text-[9px] font-black px-2 py-1 rounded shadow-sm text-black uppercase tracking-widest">
                        PB</div>
                </div>
                <div class="p-6">
                    <span
                        class="text-[9px] font-black text-carso-brand uppercase tracking-widest block mb-2">Moda</span>
                    <h3
                        class="text-xl font-black text-carso-black uppercase group-hover:text-carso-brand transition-colors mb-2">
                        Liverpool</h3>
                    <p class="text-xs text-gray-500 font-bold mb-4"><i class="far fa-clock mr-1"></i>11:00 - 21:00</p>
                    <button
                        class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-transparent group-hover:border-carso-brand group-hover:text-carso-brand transition-all">Ver
                        Detalles</button>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-all cursor-pointer">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://inmobiliaria.cushmanwakefield.es/wp-content/uploads/2023/01/pexels-mathias-reding-9328756-1-scaled.jpg"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div
                        class="absolute top-3 right-3 bg-white text-[9px] font-black px-2 py-1 rounded shadow-sm text-black uppercase tracking-widest">
                        PB</div>
                </div>
                <div class="p-6">
                    <span
                        class="text-[9px] font-black text-carso-brand uppercase tracking-widest block mb-2">Alimentos</span>
                    <h3
                        class="text-xl font-black text-carso-black uppercase group-hover:text-carso-brand transition-colors mb-2">
                        Starbucks</h3>
                    <p class="text-xs text-gray-500 font-bold mb-4"><i class="far fa-clock mr-1"></i>08:00 - 22:00</p>
                    <button
                        class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-transparent group-hover:border-carso-brand group-hover:text-carso-brand transition-all">Ver
                        Detalles</button>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- MODAL SCRIPT / AJAX HOOK -->
<script>
    // AJAX Original Logic hook (Adaptado de listadoLocatarios.php)
    /*
    $('.giroComercial').change(function(){
        var giroComercial = $(this).val();
        var centroComercial = <?php echo isset($CentroComercial) ? $CentroComercial : '10'; ?>;

    // Aquí se puede inyectar la llamada original AJAX si el backend devuelve el HTML correcto
    /*
    $.ajax({
        url: 'listadoLocatarios.php',
        type: 'POST',
        data: {centroComercial : centroComercial, giroComercial : giroComercial, piso : 'Planta Baja'},
        cache: false,
        success: function(data){
             $("#stores-grid").html(data); // Reemplazaría el grid con la respuesta del servidor
        }
    });
    */
    //}); 
</script>

<!-- CSS del Modal Local (Integrado) -->
<div id="dir-modal" class="fixed inset-0 z-[60] hidden">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeDirectoryModal()"></div>
    <div class="relative w-full h-full flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-300"
            id="dir-modal-content">
            <button onclick="closeDirectoryModal()"
                class="absolute top-6 right-6 z-10 w-10 h-10 bg-white/20 hover:bg-white text-white hover:text-black rounded-full flex items-center justify-center backdrop-blur-md transition-all">
                <i class="fas fa-times text-xl"></i>
            </button>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="h-64 md:h-[500px] bg-gray-100 relative flex items-center justify-center p-12">
                    <div class="absolute inset-0 bg-carso-brand/5"></div>
                    <img id="modal-img" src=""
                        class="w-3/4 h-auto object-contain drop-shadow-2xl mix-blend-multiply relative z-10">
                </div>
                <div class="p-10 flex flex-col justify-center bg-white relative">
                    <h2 id="modal-title"
                        class="text-5xl font-black text-carso-black uppercase tracking-tighter mb-2 leading-none"></h2>
                    <span id="modal-cat"
                        class="text-carso-brand font-bold uppercase tracking-widest text-xs mb-8 block"></span>
                    <p id="modal-desc" class="text-gray-600 font-medium text-lg leading-relaxed mb-8"></p>
                    <div class="space-y-4 border-t border-gray-100 pt-8">
                        <div class="flex items-center gap-4 text-gray-500">
                            <div
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-carso-brand">
                                <i class="fas fa-map-marker-alt"></i></div>
                            <div><span
                                    class="block text-[10px] font-black uppercase tracking-widest text-gray-400">Ubicación</span><span
                                    id="modal-loc" class="font-bold text-carso-black"></span></div>
                        </div>
                        <div class="flex items-center gap-4 text-gray-500">
                            <div
                                class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-carso-brand">
                                <i class="far fa-clock"></i></div>
                            <div><span
                                    class="block text-[10px] font-black uppercase tracking-widest text-gray-400">Horario</span><span
                                    id="modal-time" class="font-bold text-carso-black"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openDirectoryModal(title, cat, img, desc, loc, time) {
        const modal = document.getElementById('dir-modal');
        const content = document.getElementById('dir-modal-content');
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-cat').innerText = cat;
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-desc').innerText = desc;
        document.getElementById('modal-loc').innerText = loc;
        document.getElementById('modal-time').innerText = time;
        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeDirectoryModal() {
        const modal = document.getElementById('dir-modal');
        const content = document.getElementById('dir-modal-content');
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        setTimeout(() => modal.classList.add('hidden'), 300);
    }
</script>

<?php
include("footer.php");
include("modales.php");
?>