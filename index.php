<?php
include "header.php";
include "menu.php";
?>

<!-- HERO -->
<section
    class="relative h-[90vh] md:h-screen w-full overflow-hidden flex items-center justify-center bg-carso-black mt-20 min-h-[500px]">
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-50">
        <source src="https://gestomarketing.com.mx/wp-content/uploads/2026/01/3735-173719892_small.mp4"
            type="video/mp4">
    </video>

    <div class="relative z-10 text-center px-6 max-w-6xl mx-auto">
        <h1
            class="text-4xl sm:text-5xl md:text-7xl lg:text-9xl font-black text-white mb-6 leading-none tracking-tighter drop-shadow-2xl uppercase italic">
            Plaza <span class="text-carso-brand">Universidad</span>
        </h1>
        <p class="text-2xl md:text-3xl text-gray-100 font-bold max-w-3xl mx-auto leading-relaxed mb-12">
            Tu destino de compras, entretenimiento y gastronomía
        </p>
        <a href="directorio.php"
            class="inline-block px-12 py-5 bg-carso-brand text-white font-black text-lg uppercase tracking-widest rounded-full hover:bg-white hover:text-carso-brand transition-all shadow-2xl">
            Explorar Tiendas
        </a>
    </div>
</section>

<!-- EVENTOS -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-black text-carso-black mb-4 tracking-tighter uppercase italic">
                Próximos <span class="text-carso-brand">Eventos</span></h2>
            <p class="text-xl text-gray-600 font-bold uppercase tracking-widest">No te pierdas nada</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="relative h-96 rounded-3xl overflow-hidden group cursor-pointer shadow-2xl">
                <img src="https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-xs px-3 py-1 uppercase rounded mb-3 inline-block">15
                        Mar 2026</span>
                    <h3 class="text-3xl font-black uppercase mb-2 text-white">Fashion Week</h3>
                    <p class="text-gray-300 font-bold text-sm">Pasarela exclusiva de temporada</p>
                </div>
            </div>

            <div class="relative h-96 rounded-3xl overflow-hidden group cursor-pointer shadow-2xl">
                <img src="https://media.timeout.com/images/104989830/750/562/image.jpg"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-xs px-3 py-1 uppercase rounded mb-3 inline-block">22
                        Mar 2026</span>
                    <h3 class="text-3xl font-black uppercase mb-2 text-white">Concierto de Verano</h3>
                    <p class="text-gray-300 font-bold text-sm">Música en vivo - Entrada gratuita</p>
                </div>
            </div>

            <div class="relative h-96 rounded-3xl overflow-hidden group cursor-pointer shadow-2xl">
                <img src="https://imagenes.elpais.com/resizer/v2/JVSDJUU2X5IILC57IW7ZZSFNDM.jpg?auth=c97e0ff18cd03af7a39c188e5a3bc3e0175be5514dd41b4423107aafb6b1f678&width=1200"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full">
                    <span
                        class="bg-carso-brand text-white font-black text-xs px-3 py-1 uppercase rounded mb-3 inline-block">5
                        Abr 2026</span>
                    <h3 class="text-3xl font-black uppercase mb-2 text-white">Expo Tecnología</h3>
                    <p class="text-gray-300 font-bold text-sm">Las últimas novedades tech</p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="eventos.php"
                class="inline-block px-10 py-4 bg-carso-brand text-white font-black text-sm uppercase tracking-widest rounded-xl hover:bg-carso-black transition-all shadow-xl">
                Ver Todos los Eventos
            </a>
        </div>
    </div>
</section>

<!-- DIRECTORIO -->
<section class="py-24 bg-carso-dark">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-4 tracking-tighter uppercase italic">Nuestras
                <span class="text-carso-brand">Tiendas</span>
            </h2>
            <p class="text-xl text-gray-400 font-bold uppercase tracking-widest">Más de 100 locales disponibles</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-12">
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-2xl font-black text-carso-black uppercase">Sears</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-2xl font-black text-carso-black uppercase">Liverpool</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-2xl font-black text-carso-black uppercase">Zara</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-2xl font-black text-carso-black uppercase">H&M</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Starbucks</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Cinépolis</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Suburbia</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Cinemex</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-sm font-black text-carso-black uppercase">Office Depot</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Coppel</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">Telcel</span>
            </div>
            <div
                class="bg-white rounded-2xl p-6 flex items-center justify-center h-32 hover:-translate-y-2 transition-all cursor-pointer shadow-xl">
                <span class="text-xl font-black text-carso-black uppercase">AT&T</span>
            </div>
        </div>

        <div class="text-center">
            <a href="directorio.php"
                class="inline-block px-10 py-4 bg-white text-carso-brand font-black text-sm uppercase tracking-widest rounded-xl hover:bg-carso-brand hover:text-white transition-all shadow-xl">
                Ver Directorio Completo
            </a>
        </div>
    </div>
</section>

<!-- PROMOCIONES -->
<section class="py-24 bg-carso-brand">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-black text-white mb-4 tracking-tighter uppercase italic">Ofertas
                <span class="text-black">Increíbles</span>
            </h2>
            <p class="text-xl text-white font-bold uppercase tracking-widest">Descuentos exclusivos</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-2xl overflow-hidden shadow-2xl hover:-translate-y-2 transition-all">
                <div class="h-56 bg-gradient-to-br from-gray-100 to-gray-200 relative flex items-center justify-center">
                    <div
                        class="absolute top-4 right-4 bg-carso-brand text-white font-black text-3xl px-5 py-3 rounded-xl shadow-xl">
                        50%</div>
                    <span class="text-6xl font-black text-gray-300">SEARS</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-black text-carso-brand uppercase block mb-2">Sears</span>
                    <h3 class="text-2xl font-black text-carso-black uppercase mb-3">Venta Nocturna</h3>
                    <p class="text-gray-600 font-bold text-sm mb-4">Hasta 50% de descuento en toda la tienda</p>
                    <button
                        class="w-full py-3 bg-carso-brand text-white font-black text-xs uppercase rounded-lg hover:bg-carso-black transition-all">Ver
                        Promoción</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-2xl hover:-translate-y-2 transition-all">
                <div
                    class="h-56 bg-gradient-to-br from-green-100 to-green-200 relative flex items-center justify-center">
                    <div
                        class="absolute top-4 right-4 bg-carso-brand text-white font-black text-3xl px-5 py-3 rounded-xl shadow-xl">
                        2x1</div>
                    <i class="fas fa-coffee text-8xl text-green-600"></i>
                </div>
                <div class="p-6">
                    <span class="text-xs font-black text-carso-brand uppercase block mb-2">Starbucks</span>
                    <h3 class="text-2xl font-black text-carso-black uppercase mb-3">2x1 en Café</h3>
                    <p class="text-gray-600 font-bold text-sm mb-4">Compra un café y lleva otro gratis</p>
                    <button
                        class="w-full py-3 bg-carso-brand text-white font-black text-xs uppercase rounded-lg hover:bg-carso-black transition-all">Ver
                        Promoción</button>
                </div>
            </div>

            <div class="bg-white rounded-2xl overflow-hidden shadow-2xl hover:-translate-y-2 transition-all">
                <div class="h-56 bg-gradient-to-br from-blue-100 to-blue-200 relative flex items-center justify-center">
                    <div
                        class="absolute top-4 right-4 bg-carso-brand text-white font-black text-3xl px-5 py-3 rounded-xl shadow-xl">
                        40%</div>
                    <span class="text-5xl font-black text-blue-600">LIVERPOOL</span>
                </div>
                <div class="p-6">
                    <span class="text-xs font-black text-carso-brand uppercase block mb-2">Liverpool</span>
                    <h3 class="text-2xl font-black text-carso-black uppercase mb-3">Black Friday</h3>
                    <p class="text-gray-600 font-bold text-sm mb-4">Descuentos en electrónica y moda</p>
                    <button
                        class="w-full py-3 bg-carso-brand text-white font-black text-xs uppercase rounded-lg hover:bg-carso-black transition-all">Ver
                        Promoción</button>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="promociones.php"
                class="inline-block px-10 py-4 bg-white text-carso-brand font-black text-sm uppercase tracking-widest rounded-xl hover:bg-black hover:text-white transition-all shadow-xl">
                Ver Todas las Promociones
            </a>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>