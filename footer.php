<?php
echo '
<!-- FOOTER -->
<footer class="bg-plaza-black text-white pt-12 md:pt-24 pb-8 md:pb-12 border-t border-gray-900 mt-auto" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container mx-auto px-4 md:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-12 mb-10 md:mb-16 border-b border-white/10 pb-8 md:pb-12">

                <!-- Brand Column -->
                <div class="col-span-2 lg:col-span-2">
                    <a href="index.php" class="block mb-8 group" aria-label="Ir a la p&aacute;gina principal de Plaza Universidad">
                    <img src="logos/logo.png" alt="Logo de Plaza Universidad - Centro comercial en el sur de CDMX"
                        class="h-10 md:h-12 w-auto object-contain opacity-90 group-hover:opacity-100 transition-opacity"
                        width="200" height="60" loading="lazy">
                    </a>
                    <p class="text-gray-400 text-sm font-light font-sans leading-loose max-w-sm">
                        Plaza Universidad &mdash; Centro comercial con m&aacute;s de 100 tiendas en el sur de la Ciudad de M&eacute;xico desde 1969.
                    </p>
                </div>

                <!-- Explore Column -->
                <nav class="col-span-1 lg:col-span-1" aria-label="Navegaci&oacute;n del pie de p&aacute;gina">
                    <h4 class="font-bold text-plaza-gold mb-8 uppercase tracking-[0.2em] text-[10px] font-sans">Navegaci&oacute;n</h4>
                    <ul class="space-y-4 text-sm text-gray-400 font-light font-sans tracking-wide">
                        <li><a href="index.php" class="hover:text-white transition-colors duration-300">Inicio</a></li>
                        <li><a href="directorio.php" class="hover:text-white transition-colors duration-300">Directorio</a></li>
                        <li><a href="eventosypromociones.php" class="hover:text-white transition-colors duration-300">Eventos</a></li>
                        <li><a href="eventosypromociones.php" class="hover:text-white transition-colors duration-300">Promociones</a></li>
                    </ul>
                </nav>

                <!-- Visit Column -->
                <div class="col-span-1 lg:col-span-1">
                    <h4 class="font-bold text-plaza-gold mb-8 uppercase tracking-[0.2em] text-[10px] font-sans">Vis&iacute;tanos</h4>
                    <ul class="space-y-4 text-sm text-gray-400 font-light font-sans tracking-wide">
                        <li>Av. Universidad 1000</li>
                        <li>Col. Santa Cruz Atoyac</li>
                        <li>CDMX, M&eacute;xico 03310</li>
                        <li class="pt-6">
                            <a href="contacto.php" class="text-white border-b border-white/30 pb-1 hover:border-plaza-gold hover:text-plaza-gold transition-colors">Cont&aacute;ctanos</a>
                        </li>
                    </ul>
                </div>
        </div>

        <!-- Bottom Row -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-2 gap-6">
                <div class="flex flex-col md:flex-row gap-2 md:gap-8 text-center md:text-left">
                    <p class="text-[10px] text-gray-600 font-sans tracking-[0.2em] uppercase">&copy; Plaza Universidad.</p>
                </div>

                <div class="flex gap-8">
                    <a href="https://www.instagram.com/plazauniversidad" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-white hover:text-plaza-gold transition-colors transform hover:-translate-y-1 duration-300"><i class="fab fa-instagram text-lg"></i></a>
                    <a href="https://www.facebook.com/PlazaUniversidad" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="text-white hover:text-plaza-gold transition-colors transform hover:-translate-y-1 duration-300"><i class="fab fa-facebook-f text-lg"></i></a>
                    <a href="https://x.com/P_UNIVERSIDAD" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)" class="text-white hover:text-plaza-gold transition-colors transform hover:-translate-y-1 duration-300"><i class="fab fa-x-twitter text-lg"></i></a>
                </div>
        </div>
    </div>
</footer>
</body>
</html>
';
