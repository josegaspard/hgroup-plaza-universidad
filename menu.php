<?php
echo '
<!-- HEADER: Sticky Navigation -->
<header id="main-header" class="fixed w-full top-0 z-50 transition-all duration-500 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm h-16 md:h-24">
    <div class="container mx-auto px-4 md:px-6 h-full flex items-center relative">

        <!-- Mobile: Hamburger left -->
        <button class="lg:hidden text-plaza-black p-2 hover:opacity-70 transition-opacity focus:outline-none" onclick="toggleMobileMenu()">
            <div class="space-y-1.5 w-6">
                <span class="block w-full h-0.5 bg-plaza-black"></span>
                <span class="block w-full h-0.5 bg-plaza-black"></span>
                <span class="block w-full h-0.5 bg-plaza-black"></span>
            </div>
        </button>

        <!-- Center: Logo -->
        <a href="index.php" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 group z-10">
            <img src="logos/logo.png" alt="Plaza Universidad"
                 class="h-10 md:h-14 w-auto object-contain transition-transform duration-500 group-hover:scale-105">
        </a>

        <!-- Left: Desktop Navigation -->
        <nav class="hidden lg:flex flex-1 items-center justify-end gap-8 pr-24">
            <a href="directorio.php" class="text-[11px] font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-transparent hover:border-plaza-gold hover:text-plaza-purple transition-all duration-300 py-1">Directorio</a>
            <a href="eventosypromociones.php" class="text-[11px] font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-transparent hover:border-plaza-gold hover:text-plaza-purple transition-all duration-300 py-1">Eventos</a>
        </nav>

        <!-- Right: Desktop Navigation -->
        <nav class="hidden lg:flex flex-1 items-center justify-start gap-8 pl-24">
            <a href="eventosypromociones.php" class="text-[11px] font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-transparent hover:border-plaza-gold hover:text-plaza-purple transition-all duration-300 py-1">Promociones</a>
            <a href="contacto.php" class="text-[11px] font-bold uppercase tracking-[0.2em] text-plaza-black border-b border-transparent hover:border-plaza-gold hover:text-plaza-purple transition-all duration-300 py-1">Contacto</a>
        </nav>

        <!-- Mobile: Spacer right -->
        <div class="lg:hidden w-6 ml-auto"></div>
    </div>
</header>

<!-- MOBILE MENU OVERLAY -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-[60] hidden opacity-0 transition-opacity duration-500 flex-col items-center justify-center">
    <button onclick="toggleMobileMenu()" class="absolute top-8 right-8 text-plaza-black hover:rotate-90 transition-transform duration-500 focus:outline-none">
        <i class="fas fa-times text-2xl"></i>
    </button>

    <nav class="flex flex-col gap-6 text-center z-10 w-full px-6">
        <span class="text-[10px] text-plaza-gold font-bold uppercase tracking-[0.3em] mb-2">Menu Principal</span>

        <a href="index.php" class="text-3xl font-serif text-plaza-black hover:text-plaza-purple transition-colors">Inicio</a>
        <a href="directorio.php" class="text-3xl font-serif text-plaza-black hover:text-plaza-purple transition-colors">Directorio</a>
        <a href="eventosypromociones.php" class="text-3xl font-serif text-plaza-black hover:text-plaza-purple transition-colors">Eventos</a>
        <a href="eventosypromociones.php" class="text-3xl font-serif text-plaza-black hover:text-plaza-purple transition-colors">Promociones</a>

        <div class="w-16 h-px bg-plaza-gold mx-auto my-4"></div>

        <a href="contacto.php" class="text-sm font-sans font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-plaza-black transition-colors">Contacto</a>
    </nav>

    <div class="absolute bottom-12 text-center w-full">
        <img src="logos/logo.png" alt="Plaza Universidad" class="h-8 mx-auto opacity-30">
    </div>
</div>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById("mobile-menu");
        if (menu.classList.contains("hidden")) {
            menu.classList.remove("hidden");
            menu.classList.add("flex");
            setTimeout(() => {
                menu.classList.remove("opacity-0");
                document.body.classList.add("overflow-hidden");
            }, 10);
        } else {
            menu.classList.add("opacity-0");
            setTimeout(() => {
                menu.classList.add("hidden");
                menu.classList.remove("flex");
                document.body.classList.remove("overflow-hidden");
            }, 500);
        }
    }
</script>
';
?>
