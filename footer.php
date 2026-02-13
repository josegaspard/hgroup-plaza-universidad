<?php
echo '
    <!-- FOOTER -->
    <footer class="bg-black text-white pt-24 pb-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16 border-b border-gray-800 pb-12">
                <div class="col-span-1 lg:col-span-2">
                    <img src="logos/logo.webp" alt="Plaza Universidad"
                        class="h-12 w-auto mb-4 object-contain">
                    <p class="mt-6 text-gray-500 text-sm font-medium leading-relaxed max-w-sm uppercase">Creando
                        espacios que transforman ciudades.</p>
                </div>
                <div>
                    <h4 class="font-black text-carso-brand mb-6 uppercase tracking-wider text-xs">Directo</h4>
                    <ul class="space-y-4 text-sm text-gray-500 font-bold uppercase tracking-widest">
                        <li><a href="index.php" class="hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="directorio.php" class="hover:text-white transition-colors">Directorio</a></li>
                        <li><a href="eventos.php" class="hover:text-white transition-colors">Eventos</a></li>
                        <li><a href="promociones.php" class="hover:text-white transition-colors">Promociones</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-black text-carso-brand mb-6 uppercase tracking-wider text-xs">Síguenos</h4>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-carso-brand transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-carso-brand transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-carso-brand transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center text-[10px] text-gray-600 font-black uppercase tracking-widest italic">
                <p>&copy; 2026 Plaza Universidad. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- MOBILE BOTTOM BAR -->
    <div class="fixed bottom-0 w-full bg-white border-t border-gray-200 z-30 md:hidden pb-safe">
        <div class="grid grid-cols-4 h-16">
            <a href="index.php" class="flex flex-col items-center justify-center text-carso-brand">
                <i class="fas fa-home text-lg mb-1"></i>
                <span class="text-[9px] font-black uppercase tracking-tighter">Inicio</span>
            </a>
            <a href="directorio.php"
                class="flex flex-col items-center justify-center text-gray-400 hover:text-carso-brand">
                <i class="fas fa-store text-lg mb-1"></i>
                <span class="text-[9px] font-black uppercase tracking-tighter">Tiendas</span>
            </a>
            <a href="eventos.php"
                class="flex flex-col items-center justify-center text-gray-400 hover:text-carso-brand">
                <i class="fas fa-calendar-alt text-lg mb-1"></i>
                <span class="text-[9px] font-black uppercase tracking-tighter">Eventos</span>
            </a>
            <button onclick="toggleMobileMenu()"
                class="flex flex-col items-center justify-center text-gray-400 hover:text-carso-brand">
                <i class="fas fa-bars text-lg mb-1"></i>
                <span class="text-[9px] font-black uppercase tracking-tighter">Menú</span>
            </button>
        </div>
    </div>
</body>
</html>
';
?>