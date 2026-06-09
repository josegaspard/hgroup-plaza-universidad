<?php
include("header.php");
include("menu.php");
?>

<div class="bg-white min-h-screen">
    <!-- HERO PROMOCIONES: Minimalist -->
    <section class="relative pt-40 pb-20 bg-white border-b border-gray-50">
        <div class="container mx-auto px-6 text-center">
            <span
                class="text-plaza-magenta text-[10px] font-bold uppercase tracking-[0.3em] block mb-6 animate-pulse">Limited
                Time</span>
            <h1 class="text-5xl md:text-7xl font-serif text-plaza-black italic mb-8">Boutique Exclusives</h1>
            <p class="text-gray-400 font-sans font-light max-w-xl mx-auto text-lg">
                Colecciones de temporada y ofertas reservadas para nuestros visitantes distinguidos.
            </p>
        </div>
    </section>

    <!-- PROMOTIONS GRID: Magazine Layout -->
    <section class="py-24 bg-white min-h-screen">
        <div class="container mx-auto px-6">

            <div id="promos-grid" class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">

                <?php
                // SIMULACIÓN DE BACKEND: Array de Promociones
                // En producción: $promociones = $db->query("SELECT * FROM promociones WHERE activa = 1");
                $promociones = [
                    [
                        'titulo' => 'Gran Venta Nocturna',
                        'tienda' => 'Sears',
                        'imagen' => 'images/locales/Sears.jpg',
                        'descripcion' => 'Hasta 50% de descuento en toda la tienda + 20 meses sin intereses. La oportunidad perfecta para renovar tu hogar y guardarropa.',
                        'condiciones' => 'Válido hasta agotar existencias.',
                        'badge' => '50% OFF',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Lanzamiento Exclusivo',
                        'tienda' => 'iShop',
                        'imagen' => 'images/locales/iShop.jpg',
                        'descripcion' => 'Conoce el nuevo iPhone 16 Pro. Preventa exclusiva para clientes distinguidos. Sé el primero en tenerlo.',
                        'condiciones' => 'Reservas disponibles.',
                        'badge' => 'New',
                        'badge_color' => 'bg-plaza-gold'
                    ],
                    [
                        'titulo' => 'Festival de Cine',
                        'tienda' => 'Cinépolis',
                        'imagen' => 'images/locales/Cinépolis.jpg',
                        'descripcion' => 'Disfruta de la selección oficial de Cannes en nuestras salas VIP. Una experiencia cinematográfica única.',
                        'condiciones' => 'Solo por Hoy',
                        'badge' => 'VIP',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Festival Gourmet',
                        'tienda' => 'Sanborns',
                        'imagen' => 'images/locales/Sanborns.jpg',
                        'descripcion' => 'Descubre nuestro menú de temporada con platillos típicos de Oaxaca. Una explosión de sabor.',
                        'condiciones' => 'Válido todo el mes.',
                        'badge' => 'Gourmet',
                        'badge_color' => 'bg-plaza-gold'
                    ],
                    [
                        'titulo' => 'Colección Invierno',
                        'tienda' => 'Julio',
                        'imagen' => 'images/locales/Julio.jpg',
                        'descripcion' => 'Prendas que definen elegancia. Conoce nuestra nueva línea de abrigos y accesorios.',
                        'condiciones' => 'Consulta modelos participantes.',
                        'badge' => 'New',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Renueva tu Estilo',
                        'tienda' => 'Ferrioni',
                        'imagen' => 'images/locales/Ferrioni.jpg',
                        'descripcion' => '2x1 en toda la línea casual. Actualiza tu look con la calidad que nos distingue.',
                        'condiciones' => 'No aplica con otras promociones.',
                        'badge' => '2x1',
                        'badge_color' => 'bg-plaza-gold'
                    ],
                    [
                        'titulo' => 'Brilla Más',
                        'tienda' => 'Cristal Joyas',
                        'imagen' => 'images/locales/Cristal Joyas.jpg',
                        'descripcion' => '30% de descuento en diamantes seleccionados. El regalo perfecto para esa persona especial.',
                        'condiciones' => 'Hasta el 30 de Noviembre.',
                        'badge' => '30% OFF',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Deportes al Máximo',
                        'tienda' => 'Marti',
                        'imagen' => 'images/locales/Marti.jpg',
                        'descripcion' => 'Equípate para el éxito. Descuentos especiales en calzado de alto rendimiento.',
                        'condiciones' => 'Modelos seleccionados.',
                        'badge' => 'Sale',
                        'badge_color' => 'bg-plaza-gold'
                    ],
                    [
                        'titulo' => 'Momentos Inolvidables',
                        'tienda' => 'Pandora',
                        'imagen' => 'images/locales/Pandora.jpg',
                        'descripcion' => 'Compra 2 charms y llévate el 3ro de regalo. Crea una pulsera única.',
                        'condiciones' => 'En mercancía seleccionada.',
                        'badge' => '3x2',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Tecnología para Todos',
                        'tienda' => 'Telcel',
                        'imagen' => 'images/locales/Telcel.jpg',
                        'descripcion' => 'Renueva tu plan y llévate un equipo de gama alta con 50% de descuento en el pago inicial.',
                        'condiciones' => 'Planes a 24 meses.',
                        'badge' => 'Promo',
                        'badge_color' => 'bg-plaza-gold'
                    ],
                    [
                        'titulo' => 'Estilo Urbano',
                        'tienda' => 'TAF',
                        'imagen' => 'images/locales/TAF.jpg',
                        'descripcion' => 'Lanzamiento exclusivo de sneakers de edición limitada. Solo 50 pares disponibles.',
                        'condiciones' => 'Un par por persona.',
                        'badge' => 'Ltd Ed',
                        'badge_color' => 'bg-white'
                    ],
                    [
                        'titulo' => 'Dulce Antojo',
                        'tienda' => 'Nutrisa',
                        'imagen' => 'images/locales/Nutrisa.jpg',
                        'descripcion' => 'Helado suave al 2x1 todos los jueves. El pretexto ideal para visitarnos.',
                        'condiciones' => 'Solo jueves.',
                        'badge' => '2x1',
                        'badge_color' => 'bg-plaza-gold'
                    ]
                ];
                ?>

                <?php foreach ($promociones as $promo): ?>
                    <div onclick="openPromoModal('<?php echo $promo['titulo']; ?>', '<?php echo $promo['tienda']; ?>', '<?php echo $promo['imagen']; ?>', '<?php echo $promo['descripcion']; ?>', '<?php echo $promo['condiciones']; ?>')"
                        class="group break-inside-avoid relative cursor-pointer bg-white overflow-hidden fade-in-up">
                        <div
                            class="relative overflow-hidden <?php echo ($promo['tienda'] == 'Cinépolis' || $promo['tienda'] == 'Marti') ? 'h-96' : ''; ?>">
                            <img src="<?php echo $promo['imagen']; ?>"
                                class="w-full <?php echo ($promo['tienda'] == 'Cinépolis' || $promo['tienda'] == 'Marti') ? 'h-full' : ''; ?> object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                            </div>
                            <div class="absolute top-4 right-4 <?php echo $promo['badge_color']; ?> px-3 py-1">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-plaza-black"><?php echo $promo['badge']; ?></span>
                            </div>
                            <div
                                class="absolute bottom-6 left-6 right-6 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-[0.2em] mb-2 block opacity-80"><?php echo $promo['tienda']; ?></span>
                                <h3 class="text-2xl font-serif italic"><?php echo $promo['titulo']; ?></h3>
                                <div class="h-px w-0 bg-white mt-4 group-hover:w-16 transition-all duration-500 delay-100">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- PROMO MODAL: Standardized -->
    <div id="promo-modal" class="fixed inset-0 z-[70] hidden">
        <div class="absolute inset-0 bg-white/95 backdrop-blur-xl transition-opacity" onclick="closePromoModal()"></div>
        <div class="relative w-full h-full flex items-center justify-center p-6 lg:p-12">
            <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 gap-12 bg-white shadow-2xl overflow-hidden transform scale-95 opacity-0 transition-all duration-500"
                id="promo-modal-content">

                <!-- Close -->
                <button onclick="closePromoModal()"
                    class="absolute top-6 right-6 z-50 text-plaza-black hover:rotate-90 transition-transform duration-500 p-2 bg-white/50 rounded-full backdrop-blur-sm hover:bg-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Image Side -->
                <div class="col-span-1 h-64 md:h-auto bg-gray-100 relative">
                    <img id="modal-img" src="" class="w-full h-full object-cover">
                </div>

                <!-- Content Side -->
                <div class="col-span-1 p-12 flex flex-col justify-center">
                    <span id="modal-store"
                        class="text-plaza-gold text-[10px] font-bold uppercase tracking-[0.3em] mb-4 block"></span>
                    <h2 id="modal-title" class="text-4xl font-serif text-plaza-black italic mb-6 leading-none"></h2>
                    <p id="modal-desc" class="text-gray-500 font-sans font-light text-lg leading-relaxed mb-8">
                    </p>
                    <div class="p-4 bg-gray-50 border border-gray-100 mb-8">
                        <span
                            class="text-[9px] font-bold uppercase tracking-widest text-gray-400 block mb-1">Condiciones</span>
                        <p id="modal-cond" class="text-xs font-serif text-plaza-black italic"></p>
                    </div>

                    <button
                        class="w-full py-4 border border-plaza-black text-plaza-black text-xs font-bold uppercase tracking-[0.2em] hover:bg-plaza-black hover:text-white transition-colors">
                        Aprovechar Oferta
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPromoModal(title, store, img, desc, cond) {
            const modal = document.getElementById('promo-modal');
            const content = document.getElementById('promo-modal-content');

            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-store').innerText = store;
            document.getElementById('modal-img').src = img;
            document.getElementById('modal-desc').innerText = desc;
            document.getElementById('modal-cond').innerText = cond;

            modal.classList.remove('hidden');
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closePromoModal() {
            const modal = document.getElementById('promo-modal');
            const content = document.getElementById('promo-modal-content');

            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }
    </script>

    <?php
    include("footer.php");
    include("modales.php");
    ?>