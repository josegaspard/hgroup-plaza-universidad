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
        {"@type": "ListItem", "position": 2, "name": "Servicios", "item": "https://plazauniversidad.com.mx/servicios.php"}
    ]
}
</script>

<div class="bg-white min-h-screen">
    <!-- HERO -->
    <div class="relative h-[40vh] min-h-[300px] flex items-center justify-center overflow-hidden bg-plaza-gray">
        <div class="relative z-10 text-center px-6 fade-in-up">
            <nav aria-label="Breadcrumb" class="mb-4">
                <ol class="flex justify-center gap-2 text-xs text-gray-400">
                    <li><a href="index.php" class="hover:text-plaza-purple transition-colors">Inicio</a></li>
                    <li aria-hidden="true">/</li>
                    <li aria-current="page" class="text-plaza-black font-bold">Servicios</li>
                </ol>
            </nav>
            <span class="text-plaza-gold font-bold text-xs uppercase tracking-[0.3em] font-sans block mb-4">Experiencia
                al Visitante</span>
            <h1 class="text-4xl md:text-6xl font-serif text-plaza-black">Servicios de Plaza Universidad</h1>
        </div>
    </div>

    <!-- SERVICES GRID -->
    <div class="container mx-auto px-6 py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <!-- Service 1: Concierge -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">Concierge</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Nuestro equipo de Concierge está dedicado a elevar su visita. Disponibles para reservaciones,
                    información de boutiques y asistencia personalizada.
                </p>
                <a href="contacto.php"
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-plaza-gold hover:text-plaza-purple transition-colors">Contactar</a>
            </div>

            <!-- Service 2: Parking -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">Valet Parking</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Servicio de Valet Parking premium en accesos principales. Estacionamiento automatizado disponible
                    las 24 horas.
                </p>
                <div
                    class="flex justify-between items-center text-xs text-gray-400 font-light border-t border-gray-100 pt-4">
                    <span>Primera hora</span>
                    <span class="font-bold text-plaza-black">$30.00</span>
                </div>
            </div>

            <!-- Service 3: WiFi -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">High-Speed WiFi</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Manténgase conectado con nuestra red de alta velocidad gratuita en todas las áreas comunes y
                    terrazas.
                </p>
                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-300">Red: Plaza_Guest</span>
            </div>

            <!-- Service 4: Personal Shopper -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">Personal Shopper</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Asesoría de imagen y compras personalizada bajo cita. Permítanos curar una selección exclusiva para
                    usted.
                </p>
                <a href="contacto.php"
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-plaza-gold hover:text-plaza-purple transition-colors">Reservar
                    Cita</a>
            </div>

            <!-- Service 5: ATMs -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">Banca & ATMs</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Red completa de cajeros automáticos y sucursales bancarias ubicadas estratégicamente en Nivel 1 y
                    PB.
                </p>
                <a href="mapa.php"
                    class="text-[10px] font-bold uppercase tracking-[0.2em] text-plaza-gold hover:text-plaza-purple transition-colors">Ver
                    Ubicaciones</a>
            </div>

            <!-- Service 6: Pet Friendly -->
            <div
                class="group p-8 border border-gray-100 hover:border-plaza-gold/30 hover:shadow-xl transition-all duration-500 bg-white">
                <div
                    class="w-12 h-12 bg-plaza-black/5 flex items-center justify-center mb-6 rounded-full group-hover:bg-plaza-black group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-serif text-plaza-black mb-4">Pet Friendly</h3>
                <p class="text-gray-500 font-sans font-light text-sm leading-relaxed mb-6">
                    Bienvenidas las mascotas en áreas comunes. Consulte el reglamento y solicite bolsas de cortesía en
                    Concierge.
                </p>
            </div>

        </div>
    </div>
</div>

<?php
include("footer.php");
include("modales.php");
?>