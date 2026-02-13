<?php
include("header.php");
include("menu.php");
?>

<div class="bg-gray-50 min-h-screen">
    <!-- Header Page -->
    <div class="relative bg-carso-brand h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Local asset for header -->
            <img src="images/locales/Patio%20de%20comidas.jpg" alt="Promociones Plaza Universidad"
                class="w-full h-full object-cover opacity-20 mix-blend-multiply">
            <div class="absolute inset-0 bg-gradient-to-t from-carso-brand/90 to-transparent"></div>
        </div>
        <div class="relative z-10 text-center px-6">
            <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-4 italic">
                Promociones <span class="text-black">Irresistibles</span>
            </h1>
            <p class="text-xl text-white/90 font-bold uppercase tracking-widest max-w-2xl mx-auto">
                Aprovecha los mejores descuentos
            </p>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 py-24 -mt-20 relative z-20">
        <div id="promos-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <?php
            /* 
            BACKEND INTEGRATION:
            1. Iterate through YOUR actual $locales database results.
            2. For each store with an active promotion:
            */
            ?>

            <!-- STATIC DEMO (Mirroring the 1:1 local logic) -->
            <div onclick="openPromoModal('Oferta Especial', 'Sears', 'Grandes descuentos en todos nuestros departamentos.', 'images/locales/Sears.jpg', '50%', 'directorio.php?local=1')"
                class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-2 transition-all group cursor-pointer border border-gray-100">
                <div class="h-64 bg-gray-50 relative flex items-center justify-center overflow-hidden p-6">
                    <img src="images/locales/Sears.jpg"
                        class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700">
                    <div
                        class="absolute top-4 right-4 bg-carso-brand text-white font-black text-2xl px-4 py-2 rounded-xl shadow-xl z-10 transform rotate-12 group-hover:rotate-0 transition-all">
                        50%</div>
                </div>
                <div class="p-8 border-t border-gray-100">
                    <span class="text-xs font-black text-carso-brand uppercase block mb-2 tracking-widest">Oferta
                        Limitada</span>
                    <h3 class="text-xl font-black text-carso-black uppercase mb-4 leading-none line-clamp-1">Sears</h3>
                    <p class="text-gray-500 font-bold text-sm mb-6 line-clamp-2">Descuentos exclusivos esta temporada.
                    </p>
                    <button
                        class="w-full py-4 bg-carso-black text-white font-black text-xs uppercase rounded-xl hover:bg-carso-brand transition-all shadow-lg">Ver
                        Promoción</button>
                </div>
            </div>

            <div onclick="openPromoModal('Café al 2x1', 'Cielito Querido Café', 'Disfruta de tu bebida favorita al doble.', 'images/locales/Cielito%20Querido%20Caf%C3%A9.jpg', '2x1', 'directorio.php?local=3')"
                class="bg-white rounded-3xl overflow-hidden shadow-2xl hover:-translate-y-2 transition-all group cursor-pointer border border-gray-100">
                <div class="h-64 bg-gray-50 relative flex items-center justify-center overflow-hidden p-6">
                    <img src="images/locales/Cielito%20Querido%20Caf%C3%A9.jpg"
                        class="w-full h-full object-contain mix-blend-multiply group-hover:scale-110 transition-transform duration-700">
                    <div
                        class="absolute top-4 right-4 bg-carso-brand text-white font-black text-2xl px-4 py-2 rounded-xl shadow-xl z-10 transform rotate-12 group-hover:rotate-0 transition-all">
                        2x1</div>
                </div>
                <div class="p-8 border-t border-gray-100">
                    <span
                        class="text-xs font-black text-carso-brand uppercase block mb-2 tracking-widest">Favorito</span>
                    <h3 class="text-xl font-black text-carso-black uppercase mb-4 leading-none line-clamp-1">Cielito
                        Querido</h3>
                    <p class="text-gray-500 font-bold text-sm mb-6 line-clamp-2">Aprovecha nuestro 2x1 en cafés
                        seleccionados.</p>
                    <button
                        class="w-full py-4 bg-carso-black text-white font-black text-xs uppercase rounded-xl hover:bg-carso-brand transition-all shadow-lg">Ver
                        Promoción</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- MODAL PROMOCIÓN -->
<div id="promo-modal" class="fixed inset-0 z-[60] hidden">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closePromoModal()"></div>
    <div class="relative w-full h-full flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-lg rounded-3xl overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-300 relative border-4 border-carso-brand"
            id="promo-modal-content">
            <button onclick="closePromoModal()"
                class="absolute top-4 right-4 z-20 w-10 h-10 bg-black/20 hover:bg-black text-white rounded-full flex items-center justify-center backdrop-blur-md transition-all">
                <i class="fas fa-times"></i>
            </button>
            <div class="relative h-48 bg-gray-100">
                <img id="promo-img" src="" class="w-full h-full object-cover">
                <div
                    class="absolute bottom-0 left-0 bg-carso-brand text-white text-xs font-black uppercase tracking-widest px-4 py-2 rounded-tr-xl">
                    Válido hasta agotar existencias
                </div>
            </div>
            <div class="p-8 text-center">
                <div
                    class="inline-block bg-carso-black text-white text-3xl font-black px-6 py-2 rounded-lg -mt-12 mb-6 shadow-lg transform rotate-2 relative z-10">
                    <span id="promo-discount"></span>
                </div>
                <h3 id="promo-store" class="text-xs font-black text-carso-brand uppercase tracking-[0.2em] mb-2"></h3>
                <h2 id="promo-title" class="text-3xl font-black text-carso-black uppercase leading-none mb-4 italic">
                </h2>
                <p id="promo-desc" class="text-gray-600 font-medium text-sm leading-relaxed mb-8"></p>
                <div class="bg-gray-50 rounded-xl p-4 border border-dashed border-gray-300">
                    <span class="block text-[10px] font-black uppercase text-gray-400 mb-1">Código de Promoción</span>
                    <span class="text-xl font-mono font-bold text-carso-black tracking-widest">PLAZA2026</span>
                </div>
                <button id="btn-ir-local"
                    class="w-full mt-6 py-4 bg-carso-brand text-white font-black uppercase tracking-widest rounded-xl hover:bg-carso-black transition-colors shadow-lg">
                    Ir al Local
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function openPromoModal(title, store, desc, img, discount, link) {
        const modal = document.getElementById('promo-modal');
        const content = document.getElementById('promo-modal-content');
        document.getElementById('promo-title').innerText = title;
        document.getElementById('promo-store').innerText = store;
        document.getElementById('promo-desc').innerText = desc;
        document.getElementById('promo-img').src = img;
        document.getElementById('promo-discount').innerText = discount;
        if (link) document.getElementById('btn-ir-local').onclick = function () { window.location.href = link; };
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