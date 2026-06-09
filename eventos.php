<?php
include("header.php");
include("menu.php");
?>

<div class="bg-white min-h-screen">
    <!-- Header Page: Clean & Editorial -->
    <div class="relative h-[80vh] flex items-center justify-center overflow-hidden bg-plaza-black group">
        <!-- Parallax Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="images/locales/Exteriores%20de%20plaza.jpg"
                alt="Eventos Plaza Universidad"
                class="w-full h-full object-cover opacity-70 mix-blend-overlay transition-transform duration-[30s] group-hover:scale-110">
            <div
                class="absolute inset-0 bg-gradient-to-t from-plaza-black via-plaza-black/40 to-transparent mix-blend-multiply">
            </div>
            <div class="absolute inset-0 bg-black/10"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto fade-in-up flex flex-col items-center">
            <div class="mb-10 flex flex-col items-center gap-2">
                <div class="w-px h-16 bg-gradient-to-b from-transparent to-plaza-gold"></div>
                <span class="text-white/80 font-sans font-bold text-[10px] uppercase tracking-[0.5em] border py-2 px-4 border-white/20 backdrop-blur-sm">Calendario de Eventos</span>
            </div>

            <h1 class="text-7xl md:text-9xl font-serif text-white leading-[0.9] tracking-tight mb-8 drop-shadow-2xl">
                Eventos <span class="italic font-light text-plaza-gold/90">&</span><br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-400 font-sans font-light tracking-tighter">Promociones</span>
            </h1>

            <div class="h-px w-24 bg-white/20 my-8"></div>

            <p class="text-gray-200 font-sans font-light text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed tracking-wide drop-shadow-md">
                Donde la moda se encuentra con el arte. Descubre los eventos exclusivos que definen la temporada.
            </p>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 opacity-60 animate-bounce">
            <span class="text-[9px] uppercase tracking-[0.3em] text-white">Explorar</span>
            <div class="w-px h-16 bg-gradient-to-b from-white to-transparent"></div>
        </div>
    </div>

    <!-- CONTENT START -->
    <div class="container mx-auto px-6 py-24">
        <!-- Filter/Nav -->
        <div class="flex justify-center mb-20">
            <div class="inline-flex border-b border-gray-100">
                <button class="px-8 py-4 text-xs font-bold uppercase tracking-[0.2em] text-plaza-black border-b-2 border-plaza-black">Próximos</button>
                <button class="px-8 py-4 text-xs font-bold uppercase tracking-[0.2em] text-gray-300 hover:text-gray-500 transition-colors">Pasados</button>
            </div>
        </div>

        <div id="events-grid" class="space-y-24">
            <?php
            // Mock data representing the backend structure
            $eventos = [
                [
                    'titulo' => 'Fashion Week 2026',
                    'categoria' => 'Fashion',
                    'imagen' => 'images/locales/Julio.jpg',
                    'fecha_dia' => '20',
                    'fecha_mes' => 'Oct',
                    'fecha_completa' => '20 OCT - 18:00',
                    'lugar' => 'Pasarela Central',
                    'descripcion' => 'Un despliegue de elegancia y tendencia. Acompáñanos a descubrir lo que dictará el estilo esta temporada en nuestra exclusiva pasarela.',
                    'cta' => 'Reservar Lugar',
                    'layout' => 'featured'
                ],
                [
                    'titulo' => 'Cata de Vinos',
                    'categoria' => 'Gastronomía',
                    'imagen' => 'images/locales/Sanborns.jpg',
                    'fecha_dia' => '25',
                    'fecha_mes' => 'Oct',
                    'fecha_completa' => '25 OCT - 20:00',
                    'lugar' => 'Terraza Gourmet',
                    'descripcion' => 'Una velada íntima para los amantes del buen vivir. Degustación guiada de etiquetas premium y maridaje gourmet.',
                    'cta' => 'Ver Detalles',
                    'layout' => 'alt'
                ],
                [
                    'titulo' => 'Training Day',
                    'categoria' => 'Wellness',
                    'imagen' => 'images/locales/Marti.jpg',
                    'fecha_dia' => '05',
                    'fecha_mes' => 'Nov',
                    'fecha_completa' => '05 NOV - 09:00',
                    'lugar' => 'Plaza Central',
                    'descripcion' => 'Energía y movimiento. Únete a nuestra masterclass de entrenamiento funcional patrocinada por Marti.',
                    'cta' => 'Registrarse',
                    'layout' => 'alt'
                ]
            ];

            foreach ($eventos as $evento):
                if ($evento['layout'] == 'featured'): ?>
                            <!-- Featured Event -->
                            <div onclick="openEventModal('<?php echo $evento['titulo']; ?>', '<?php echo $evento['imagen']; ?>', '<?php echo $evento['fecha_completa']; ?>', '<?php echo $evento['lugar']; ?>', '<?php echo $evento['descripcion']; ?>')"
                                class="group cursor-pointer grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-up">
                                <div class="relative h-[60vh] overflow-hidden bg-gray-100 shadow-2xl skew-y-1 transform transition-transform duration-700 group-hover:skew-y-0">
                                    <img src="<?php echo $evento['imagen']; ?>" class="w-full h-full object-cover transition-all duration-1000 scale-105 group-hover:scale-100">
                                    <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-md p-4 text-center min-w-[80px]">
                                        <span class="block text-2xl font-serif text-plaza-black italic font-bold"><?php echo $evento['fecha_dia']; ?></span>
                                        <span class="block text-[9px] font-bold uppercase tracking-widest text-plaza-black"><?php echo $evento['fecha_mes']; ?></span>
                                    </div>
                                </div>
                                <div class="lg:pl-12 text-center lg:text-left">
                                    <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block"><?php echo $evento['categoria']; ?></span>
                                    <h2 class="text-4xl md:text-6xl font-serif text-plaza-black mb-6 italic group-hover:text-plaza-purple transition-colors"><?php echo $evento['titulo']; ?></h2>
                                    <p class="text-gray-400 font-sans font-light text-lg leading-relaxed mb-8 max-w-md mx-auto lg:mx-0"><?php echo $evento['descripcion']; ?></p>
                                    <span class="inline-block text-xs font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-plaza-black pb-1 group-hover:border-plaza-purple group-hover:text-plaza-purple transition-colors"><?php echo $evento['cta']; ?></span>
                                </div>
                            </div>
                    <?php else: ?>
                            <!-- Alt/Standard Event -->
                            <div onclick="openEventModal('<?php echo $evento['titulo']; ?>', '<?php echo $evento['imagen']; ?>', '<?php echo $evento['fecha_completa']; ?>', '<?php echo $evento['lugar']; ?>', '<?php echo $evento['descripcion']; ?>')"
                                class="group cursor-pointer grid grid-cols-1 lg:grid-cols-2 gap-12 items-center fade-in-up">
                                <div class="order-2 lg:order-1 lg:pr-12 text-center lg:text-right">
                                    <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block"><?php echo $evento['categoria']; ?></span>
                                    <h2 class="text-4xl md:text-6xl font-serif text-plaza-black mb-6 italic group-hover:text-plaza-purple transition-colors"><?php echo $evento['titulo']; ?></h2>
                                    <p class="text-gray-400 font-sans font-light text-lg leading-relaxed mb-8 max-w-md mx-auto lg:mx-0 lg:ml-auto"><?php echo $evento['descripcion']; ?></p>
                                    <span class="inline-block text-xs font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-plaza-black pb-1 group-hover:border-plaza-purple group-hover:text-plaza-purple transition-colors"><?php echo $evento['cta']; ?></span>
                                </div>
                                <div class="order-1 lg:order-2 relative h-[60vh] overflow-hidden bg-gray-100 shadow-2xl -skew-y-1 transform transition-transform duration-700 group-hover:skew-y-0">
                                    <img src="<?php echo $evento['imagen']; ?>" class="w-full h-full object-cover transition-all duration-1000 scale-105 group-hover:scale-100">
                                    <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md p-4 text-center min-w-[80px]">
                                        <span class="block text-2xl font-serif text-plaza-black italic font-bold"><?php echo $evento['fecha_dia']; ?></span>
                                        <span class="block text-[9px] font-bold uppercase tracking-widest text-plaza-black"><?php echo $evento['fecha_mes']; ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php endif;
            endforeach; ?>
        </div>
    </div>
</div>

<!-- MODAL -->
<div id="event-modal" class="fixed inset-0 z-[70] hidden">
    <div class="absolute inset-0 bg-white/95 backdrop-blur-xl transition-opacity" onclick="closeEventModal()"></div>
    <div class="relative w-full h-full flex items-center justify-center p-6 lg:p-12">
        <div class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-2 bg-white shadow-2xl border border-gray-50 overflow-hidden transform scale-95 opacity-0 transition-all duration-500" id="event-modal-content">
            <button onclick="closeEventModal()" class="absolute top-6 right-6 z-50 text-plaza-black hover:rotate-90 transition-transform duration-500 p-2 bg-white/50 rounded-full backdrop-blur-sm hover:bg-white shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <div class="h-64 lg:h-auto bg-gray-100 relative">
                <img id="modal-img" src="" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-plaza-purple/20 mix-blend-multiply"></div>
            </div>
            <div class="p-12 flex flex-col justify-center">
                <span class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] mb-4">Evento Exclusivo</span>
                <h2 id="modal-title" class="text-4xl lg:text-5xl font-serif text-plaza-black italic mb-8 leading-none"></h2>
                <div class="flex flex-col gap-6 mb-12">
                    <div class="flex items-center gap-4"><i class="far fa-clock text-plaza-gold"></i><span id="modal-date" class="font-sans font-light text-gray-500"></span></div>
                    <div class="flex items-center gap-4"><i class="fas fa-map-marker-alt text-plaza-gold"></i><span id="modal-loc" class="font-sans font-light text-gray-500"></span></div>
                </div>
                <p id="modal-desc" class="text-gray-600 font-sans font-light leading-relaxed mb-12"></p>
                <button class="w-full py-4 bg-plaza-black text-white text-xs font-bold uppercase tracking-[0.2em] hover:bg-plaza-purple transition-colors">Confirmar Asistencia</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openEventModal(title, img, date, loc, desc) {
        const modal = document.getElementById('event-modal');
        const content = document.getElementById('event-modal-content');
        document.getElementById('modal-title').innerText = title;
        document.getElementById('modal-date').innerText = date;
        document.getElementById('modal-img').src = img;
        document.getElementById('modal-desc').innerText = desc;
        modal.classList.remove('hidden');
        setTimeout(() => { content.classList.remove('scale-95', 'opacity-0'); content.classList.add('scale-100', 'opacity-100'); }, 10);
    }
    function closeEventModal() {
        const modal = document.getElementById('event-modal');
        const content = document.getElementById('event-modal-content');
        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');
        setTimeout(() => { modal.classList.add('hidden'); }, 500);
    }
</script>

<?php
include("footer.php");
include("modales.php");
?>