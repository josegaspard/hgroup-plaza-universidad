<?php
echo '
<!-- HEADER -->
    <header class="fixed w-full top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 h-20">
        <div class="container mx-auto px-6 h-full flex justify-between items-center">
            <a href="index.php" class="flex items-center gap-3 group z-50 relative h-full">
                <img src="logos/logo.webp" alt="Plaza Universidad"
                    class="h-10 md:h-14 w-auto object-contain drop-shadow-sm group-hover:scale-105 transition-transform duration-300">
                <div class="flex flex-col justify-center">
                    <span
                        class="text-[10px] font-black uppercase tracking-[0.2em] text-carso-brand leading-none mb-0.5">PLAZA</span>
                    <span
                        class="text-lg font-black uppercase leading-none text-carso-black tracking-tighter">UNIVERSIDAD</span>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-8 h-full">
                <a href="directorio.php"
                    class="text-sm font-extrabold uppercase hover:text-carso-brand transition-colors">Directorio</a>
                <a href="eventos.php"
                    class="text-sm font-extrabold uppercase hover:text-carso-brand transition-colors">Eventos</a>
                <a href="promociones.php"
                    class="text-sm font-extrabold uppercase hover:text-carso-brand transition-colors">Promociones</a>
                <a href="contacto.php"
                    class="text-sm font-extrabold uppercase text-carso-brand transition-colors">Contacto</a>
            </nav>

            <button class="lg:hidden text-carso-black p-2" onclick="toggleMobileMenu()">
                <div class="space-y-1.5 w-8">
                    <span class="block w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="block w-full h-0.5 bg-black transition-all duration-300"></span>
                    <span class="block w-full h-0.5 bg-black transition-all duration-300"></span>
                </div>
            </button>
        </div>
    </header>

    <!-- MENÚ MÓVIL (Overlay) -->
    <div id="mobile-menu" class="fixed inset-0 bg-white z-40 hidden opacity-0 transition-opacity duration-300">
        <div class="flex flex-col items-center justify-center w-full h-full p-6">
            <nav class="flex flex-col gap-8 text-center z-10 w-full">
                <a href="index.php"
                    class="text-4xl font-black uppercase text-carso-black hover:text-carso-brand transition-colors">Inicio</a>
                <a href="directorio.php"
                    class="text-4xl font-black uppercase text-carso-black hover:text-carso-brand transition-colors">Directorio</a>
                <a href="eventos.php"
                    class="text-4xl font-black uppercase text-carso-black hover:text-carso-brand transition-colors">Eventos</a>
                <a href="promociones.php"
                    class="text-4xl font-black uppercase text-carso-black hover:text-carso-brand transition-colors">Promociones</a>
                <a href="contacto.php"
                    class="text-xl font-bold uppercase text-white bg-carso-brand py-4 px-8 rounded-full shadow-xl mx-auto mt-4">Contacto</a>
            </nav>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
            setTimeout(() => menu.classList.toggle("opacity-0"), 10);
        }
    </script>
';
?>