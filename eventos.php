<?php
include("header.php");
include("menu.php");
?>

<div class="bg-gray-50 min-h-screen">
    <!-- Header Page -->
    <div class="relative bg-carso-black h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555529733-0e670560f7e1?q=80&w=2940&auto=format&fit=crop"
                alt="Eventos Plaza Universidad" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-t from-carso-black/90 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-4 italic">
                Eventos <span class="text-carso-brand">Exclusivos</span>
            </h1>
            <p class="text-xl text-gray-300 font-bold uppercase tracking-widest max-w-2xl mx-auto">
                Vive experiencias inolvidables
            </p>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 py-24 -mt-20 relative z-20">

        <!-- 
             IMPORTANTE PARA INTEGRACIÓN BACKEND:
             El código original usaba: 
             $publicaciones = publicaciones($CentroComercial);
             echo $publicaciones;
             
             Para mantener este diseño nuevo, la función 'publicaciones' en 'conexion.php' debe actualizarse 
             para generar el siguiente HTML para cada evento:
        -->

        <div id="events-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            // BLOQUE DE INTEGRACIÓN (Descomentar y ajustar cuando se actualice la función backend)
            /*
            $CentroComercial = $_POST['centroComercial'] ?? $CentroComercial;

            // Opción A: Si la función devuelve HTML ya formateado con este nuevo diseño:
            // echo publicaciones($CentroComercial);

            // Opción B: Si se cambia la función para devolver un ARRAY de datos (Recomendado):
            // $eventos = obtenerPublicacionesArray($CentroComercial);
            // foreach($eventos as $evento) {
            //    // Renderizar HTML con $evento['titulo'], $evento['fecha'], etc.
            // }
            */
            ?>

            <!-- EJEMPLO DE ESTRUCTURA HTML REQUERIDA (STATIC DEMO) -->
            <div onclick="openEventModal('Fashion Week', '15 Mar 2026', 'https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200', 'Únete a nosotros para la semana de la moda más esperada del año. Pasarelas exclusivas, diseñadores invitados y las últimas tendencias de la temporada Primavera-Verano. Acceso libre en la explanada central.')"
                class="relative h-[500px] rounded-[2rem] overflow-hidden group cursor-pointer shadow-xl hover:shadow-2xl transition-all">
                <img src="https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200"
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-[10px] px-3 py-1 uppercase rounded mb-4 inline-block tracking-widest">15
                        Mar 2026</span>
                    <h3 class="text-4xl font-black uppercase mb-4 tracking-tighter text-white leading-none">Fashion Week
                    </h3>
                    <p class="text-gray-300 font-bold text-sm mb-6">Pasarela exclusiva de temporada Primavera-Verano con
                        las mejores marcas.</p>
                    <span
                        class="text-carso-brand font-black text-xs uppercase tracking-widest flex items-center gap-2 group-hover:translate-x-2 transition-transform">Ver
                        Detalles <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>

            <!-- Evento 2 -->
            <div onclick="openEventModal('Concierto Verano', '22 Mar 2026', 'https://media.timeout.com/images/104989830/750/562/image.jpg', 'Disfruta de una tarde llena de música en vivo con artistas locales e invitados especiales. Un ambiente familiar perfecto para el fin de semana. Entrada gratuita.')"
                class="relative h-[500px] rounded-[2rem] overflow-hidden group cursor-pointer shadow-xl hover:shadow-2xl transition-all">
                <img src="https://media.timeout.com/images/104989830/750/562/image.jpg"
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-[10px] px-3 py-1 uppercase rounded mb-4 inline-block tracking-widest">22
                        Mar 2026</span>
                    <h3 class="text-4xl font-black uppercase mb-4 tracking-tighter text-white leading-none">Concierto
                        Verano</h3>
                    <p class="text-gray-300 font-bold text-sm mb-6">Disfruta de música en vivo en nuestra explanada
                        central totalmente gratis.</p>
                    <span
                        class="text-carso-brand font-black text-xs uppercase tracking-widest flex items-center gap-2 group-hover:translate-x-2 transition-transform">Ver
                        Detalles <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>

            <!-- Evento 3 -->
            <div onclick="openEventModal('Expo Tech', '05 Abr 2026', 'https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200', 'Descubre lo último en tecnología, gadgets y videojuegos. Demostraciones en vivo, torneos y descuentos especiales en tiendas de tecnología participantes.')"
                class="relative h-[500px] rounded-[2rem] overflow-hidden group cursor-pointer shadow-xl hover:shadow-2xl transition-all">
                <img src="https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200"
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-10 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-[10px] px-3 py-1 uppercase rounded mb-4 inline-block tracking-widest">05
                        Abr 2026</span>
                    <h3 class="text-4xl font-black uppercase mb-4 tracking-tighter text-white leading-none">Expo Tech
                    </h3>
                    <p class="text-gray-300 font-bold text-sm mb-6">Las novedades tecnológicas más esperadas del año.
                    </p>
                    <span
                        class="text-carso-brand font-black text-xs uppercase tracking-widest flex items-center gap-2 group-hover:translate-x-2 transition-transform">Ver
                        Detalles <i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Template (Hidden by default) -->
<div id="event-modal" class="fixed inset-0 z-[60] hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/90 backdrop-blur-md transition-opacity" onclick="closeEventModal()"></div>

    <!-- Modal Content -->
    <div class="relative w-full h-full flex items-center justify-center p-4">
        <div class="bg-carso-black w-full max-w-5xl rounded-[3rem] overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-500 border border-white/10"
            id="event-modal-content">
            <button onclick="closeEventModal()"
                class="absolute top-8 right-8 z-20 w-12 h-12 bg-white/10 hover:bg-carso-brand text-white rounded-full flex items-center justify-center backdrop-blur-md transition-all">
                <i class="fas fa-times text-xl"></i>
            </button>

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="h-80 lg:h-[600px] relative">
                    <img id="modal-img" src="" class="absolute inset-0 w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-carso-black via-transparent to-transparent lg:bg-gradient-to-r">
                    </div>
                </div>
                <div class="p-12 lg:p-16 flex flex-col justify-center relative">
                    <span id="modal-date"
                        class="text-carso-brand font-black uppercase tracking-[0.2em] text-sm mb-4 block"></span>
                    <h2 id="modal-title"
                        class="text-5xl lg:text-7xl font-black text-white uppercase tracking-tighter mb-8 leading-none italic">
                    </h2>

                    <div class="w-20 h-1 bg-carso-brand mb-8"></div>

                    <p id="modal-desc" class="text-gray-400 font-medium text-lg leading-relaxed mb-12"></p>

                    <button onclick="closeEventModal()"
                        class="self-start px-10 py-4 bg-white text-carso-black font-black uppercase tracking-widest rounded-full hover:bg-carso-brand hover:text-white transition-all shadow-lg transform hover:-translate-y-1">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openEventModal(title, date, img, desc) {
        const modal = document.getElementById('event-modal');
        const content = document.getElementById('event-modal-content');

        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-date').innerText = date;
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-desc').innerText = desc;

        modal.classList.remove('hidden');

        // Animation delay
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeEventModal() {
        const modal = document.getElementById('event-modal');
        const content = document.getElementById('event-modal-content');

        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 500); // Wait for animation
    }
</script>

<?php
include("footer.php");
include("modales.php");
?>