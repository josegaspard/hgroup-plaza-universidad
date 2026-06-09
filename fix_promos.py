import re

with open('promociones.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Replace Header
target_hero = """            <!-- Content -->
            <div class="relative z-10 text-center px-6 max-w-5xl mx-auto fade-in-up flex flex-col items-center">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-serif text-white leading-tight mb-6 md:mb-8 drop-shadow-2xl">
                    Eventos &amp; <span class="text-plaza-gold font-light">Actividades del Mall</span>
                </h1>
                <p
                    class="text-gray-200 font-sans font-light text-sm md:text-lg max-w-2xl mx-auto leading-relaxed tracking-wide">
                    Premières, conciertos, activaciones y mucho más. Descubre lo que está pasando en Plaza Universidad.
                </p>
            </div>"""

new_hero = """            <!-- Content -->
            <div class="relative z-10 text-center px-6 max-w-5xl mx-auto fade-in-up flex flex-col items-center">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-serif text-white leading-tight mb-6 md:mb-8 drop-shadow-2xl">
                    Eventos y <span class="text-plaza-gold font-light">Activaciones</span>
                </h1>
                <p
                    class="text-gray-200 font-sans font-light text-sm md:text-lg max-w-2xl mx-auto leading-relaxed tracking-wide">
                    Premiéres, conciertos, activaciones y mucho más. Descubre lo que está pasando en Plaza Universidad.
                </p>
            </div>"""

content = content.replace(target_hero, new_hero)

grid_pattern = re.compile(r'<div id="promos-grid".*?</div>\s*</div>\s*</section>', re.DOTALL)

new_grid = """<div id="promos-grid" class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <!-- Evento 1 -->
                    <div onclick="openPromoModal('Evento Especial', 'Plaza Universidad', 'images/promociones/evento1.jpg', '¡Te invitamos a disfrutar de grandes sorpresas en Plaza Universidad!', '', '')"
                        class="group cursor-pointer bg-white overflow-hidden fade-in-up rounded-sm shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="relative overflow-hidden aspect-[4/5] bg-gray-50">
                            <img src="images/promociones/evento1.jpg"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-plaza-black/90 via-plaza-black/20 to-transparent opacity-80"></div>
                            
                            <div class="absolute top-6 right-6">
                                <span class="bg-plaza-gold text-plaza-black text-[9px] font-bold uppercase tracking-widest px-4 py-2">Evento</span>
                            </div>
                            
                            <div class="absolute bottom-8 left-8 right-8 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
                                <h3 class="text-2xl font-serif mb-2">Evento Especial</h3>
                                <p class="text-gray-300 text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 line-clamp-2">¡Te invitamos a disfrutar de grandes sorpresas en Plaza Universidad!</p>
                                <div class="h-px w-0 bg-plaza-gold mt-4 group-hover:w-16 transition-all duration-500 delay-100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Evento 2 -->
                    <div onclick="openPromoModal('Activación Especial', 'Plaza Universidad', 'images/promociones/evento2.jpg', 'Ven a Plaza Universidad y forma parte de nuestra activación exclusiva.', '', '')"
                        class="group cursor-pointer bg-white overflow-hidden fade-in-up rounded-sm shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="relative overflow-hidden aspect-[4/5] bg-gray-50">
                            <img src="images/promociones/evento2.jpg"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-plaza-black/90 via-plaza-black/20 to-transparent opacity-80"></div>
                            
                            <div class="absolute top-6 right-6">
                                <span class="bg-white text-plaza-black text-[9px] font-bold uppercase tracking-widest px-4 py-2">Activación</span>
                            </div>
                            
                            <div class="absolute bottom-8 left-8 right-8 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
                                <h3 class="text-2xl font-serif mb-2">Activación Especial</h3>
                                <p class="text-gray-300 text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500 line-clamp-2">Ven a Plaza Universidad y forma parte de nuestra activación exclusiva.</p>
                                <div class="h-px w-0 bg-plaza-gold mt-4 group-hover:w-16 transition-all duration-500 delay-100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>"""

content = re.sub(r'<div id="promos-grid" class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">.*?</div>\s*</div>\s*</section>', new_grid, content, flags=re.DOTALL)

with open('promociones.html', 'w', encoding='utf-8') as f:
    f.write(content)

