import re

# 1. Update index.html
with open('index.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Remove the text about "Espacios Disponibles" near line 549
# Match the whole block:
# <div class="bg-plaza-black text-white p-6 rounded-sm">
# ...
# </div>
block_to_remove = re.search(r'(<!-- Espacios disponibles y contacto de rentas -->\s*<div class="bg-plaza-black text-white p-6 rounded-sm">.*?</div>)', content, flags=re.DOTALL)
if block_to_remove:
    content = content.replace(block_to_remove.group(1), '')

# Replaced the entire grid around 386.
new_grid = """<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-14">

                <!-- Columna 1 -->
                <div>
                    <!-- Moda -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Moda</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Adolfo%20Domínguez" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Adolfo Domínguez</a></li>
                        <li><a href="directorio.html?tienda=Hugo%20Boss" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Hugo Boss</a></li>
                        <li><a href="directorio.html?tienda=Guess" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Guess</a></li>
                        <li><a href="directorio.html?tienda=Robert's" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Robert's</a></li>
                        <li><a href="directorio.html?tienda=Carters" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Carters</a></li>
                        <li><a href="directorio.html?tienda=Julio" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Julio</a></li>
                        <li><a href="directorio.html?tienda=Lacoste" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Lacoste</a></li>
                        <li><a href="directorio.html?tienda=Cuadra" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cuadra</a></li>
                        <li><a href="directorio.html?tienda=Tommy%20Hilfiger" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Tommy Hilfiger</a></li>
                        <li><a href="directorio.html?tienda=Shasa" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Shasa</a></li>
                        <li><a href="directorio.html?tienda=Lefties" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Lefties</a></li>
                        <li><a href="directorio.html?tienda=Vanty" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Vanty</a></li>
                        <li><a href="directorio.html?tienda=Brook%20Brothers" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Brook Brothers</a></li>
                        <li><a href="directorio.html?tienda=Ivonne" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Ivonne</a></li>
                        <li><a href="directorio.html?tienda=Liz%20Minelli" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Liz Minelli</a></li>
                        <li><a href="directorio.html?tienda=Men's%20Factory" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Men's Factory</a></li>
                        <li><a href="directorio.html?tienda=Ay%20Güey" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Ay Güey</a></li>
                        <li><a href="directorio.html?tienda=Aldo%20Conti" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Aldo Conti</a></li>
                        <li><a href="directorio.html?tienda=El%20Circo" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> El Circo</a></li>
                        <li><a href="directorio.html?tienda=Cuidado%20con%20el%20Perro" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cuidado Con El Perro</a></li>
                        <li><a href="directorio.html?tienda=Women'%20Secret" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Women' Secret</a></li>
                        <li><a href="directorio.html?tienda=Ariat" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Ariat</a></li>
                        <li><a href="directorio.html?tienda=Stradivarius" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Stradivarius</a></li>
                        <li><a href="directorio.html?tienda=Stop" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Stop</a></li>
                    </ul>

                    <!-- Belleza y Salud -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Belleza y Salud</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Barber%20Music%20&%20Spa" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Barber Music & Spa</a></li>
                        <li><a href="directorio.html?tienda=Dentalia" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Dentalia</a></li>
                        <li><a href="directorio.html?tienda=Blush%20Bar" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Blush Bar</a></li>
                        <li><a href="directorio.html?tienda=Bellísima" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Bellísima</a></li>
                        <li><a href="directorio.html?tienda=Sally%20Beauty" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Sally Beauty</a></li>
                        <li><a href="directorio.html?tienda=Mac%20Cosmetic" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Mac Cosmetic</a></li>
                    </ul>
                </div>

                <!-- Columna 2 -->
                <div>
                    <!-- Comida Rápida y Más... -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Comida Rápida y Más...</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Starbucks" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Starbucks</a></li>
                        <li><a href="directorio.html?tienda=Yog%20And%20Fruits" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Yog And Fruits</a></li>
                        <li><a href="directorio.html?tienda=Costanzo" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Costanzo</a></li>
                        <li><a href="directorio.html?tienda=Yue%20Cha" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Yue Cha</a></li>
                        <li><a href="directorio.html?tienda=Santa%20Clara" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Santa Clara</a></li>
                        <li><a href="directorio.html?tienda=Richards" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Richards</a></li>
                        <li><a href="directorio.html?tienda=Argentina%20Express" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Argentina Express</a></li>
                        <li><a href="directorio.html?tienda=Estrella%20Brillante" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Estrella Brillante</a></li>
                        <li><a href="directorio.html?tienda=Tipioka" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Tipioka</a></li>
                        <li><a href="directorio.html?tienda=Little%20Caesars" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Little Caesars</a></li>
                        <li><a href="directorio.html?tienda=Carl's%20Jr" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Carl's Jr</a></li>
                        <li><a href="directorio.html?tienda=KFC" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> KFC</a></li>
                        <li><a href="directorio.html?tienda=La%20Fragua" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> La Fragua</a></li>
                        <li><a href="directorio.html?tienda=Day%20Light%20Salads" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Day Light Salads</a></li>
                        <li><a href="directorio.html?tienda=La%20Fe%20Malasian" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> La Fe Malasian</a></li>
                        <li><a href="directorio.html?tienda=Subway" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Subway</a></li>
                        <li><a href="directorio.html?tienda=Nutrisa" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Nutrisa</a></li>
                    </ul>

                    <!-- Restaurantes -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Restaurantes</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Italianni's" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Italianni's</a></li>
                        <li><a href="directorio.html?tienda=Chili's" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Chili's</a></li>
                        <li><a href="directorio.html?tienda=Sushi%20Roll" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Sushi Roll</a></li>
                        <li><a href="directorio.html?tienda=Rebel%20Wings" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Rebel Wings</a></li>
                    </ul>

                    <!-- Deportes y Más... -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Deportes y Más...</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Tactical%205.11" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Tactical 5.11</a></li>
                        <li><a href="directorio.html?tienda=Puma" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Puma</a></li>
                        <li><a href="directorio.html?tienda=Fullsand" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Fullsand</a></li>
                        <li><a href="directorio.html?tienda=Charly" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Charly</a></li>
                        <li><a href="directorio.html?tienda=Adidas" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Adidas</a></li>
                        <li><a href="directorio.html?tienda=47%20Brand" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> 47 Brand</a></li>
                        <li><a href="directorio.html?tienda=Martí" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Martí</a></li>
                        <li><a href="directorio.html?tienda=New%20Era" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> New Era</a></li>
                        <li><a href="directorio.html?tienda=Snaps" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Snaps</a></li>
                        <li><a href="directorio.html?tienda=Salomon" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Salomon</a></li>
                        <li><a href="directorio.html?tienda=Cap-2" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cap-2</a></li>
                    </ul>
                </div>

                <!-- Columna 3 -->
                <div>
                    <!-- Calzado -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Calzado</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Flexi" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Flexi</a></li>
                        <li><a href="directorio.html?tienda=Brantano" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Brantano</a></li>
                        <li><a href="directorio.html?tienda=Gillio" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Gillio</a></li>
                        <li><a href="directorio.html?tienda=Skechers" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Skechers</a></li>
                        <li><a href="directorio.html?tienda=Pikolinos" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Pikolinos</a></li>
                        <li><a href="directorio.html?tienda=Taf" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> TAF</a></li>
                        <li><a href="directorio.html?tienda=Stylo" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Stylo</a></li>
                        <li><a href="directorio.html?tienda=Coqueta%20y%20Audáz" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Coqueta y Audáz</a></li>
                        <li><a href="directorio.html?tienda=Lob%20Foot%20Wear" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Lob Foot Wear</a></li>
                        <li><a href="directorio.html?tienda=Vans" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Vans</a></li>
                    </ul>

                    <!-- Entretenimiento -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Entretenimiento</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Cinepolis" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cinepolis</a></li>
                        <li><a href="directorio.html?tienda=Game%20Planet" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Game Planet</a></li>
                        <li><a href="directorio.html?tienda=Circus%20Park" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Circus Park</a></li>
                    </ul>

                    <!-- Joyerías -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Joyerías</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Bizzarro" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Bizzarro</a></li>
                        <li><a href="directorio.html?tienda=Cristal%20Joyas" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cristal Joyas</a></li>
                        <li><a href="directorio.html?tienda=Pandora" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Pandora</a></li>
                        <li><a href="directorio.html?tienda=Platax" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Platax</a></li>
                        <li><a href="directorio.html?tienda=Christie's%20XXI" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Christie's XXI</a></li>
                    </ul>

                    <!-- Accesorios y Souvenirs -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Accesorios y Souvenirs</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Miniso" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Miniso</a></li>
                        <li><a href="directorio.html?tienda=Tous" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Tous</a></li>
                        <li><a href="directorio.html?tienda=Isadora" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Isadora</a></li>
                        <li><a href="directorio.html?tienda=Todomoda" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Todomoda</a></li>
                        <li><a href="directorio.html?tienda=Cloe" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Cloe</a></li>
                    </ul>
                </div>

                <!-- Columna 4 -->
                <div>
                    <!-- Tiendas de Especialidades -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Tiendas de Especialidades</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=GNC" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> GNC</a></li>
                        <li><a href="directorio.html?tienda=Best%20Day" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Best Day</a></li>
                        <li><a href="directorio.html?tienda=Price%20Travel" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Price Travel</a></li>
                        <li><a href="directorio.html?tienda=Garmin" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Garmin</a></li>
                        <li><a href="directorio.html?tienda=La%20Casa%20De%20Las%20Carcasas" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> La Casa De Las Carcasas</a></li>
                        <li><a href="directorio.html?tienda=Frequent%20Flayer" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Frequent Flayer</a></li>
                        <li><a href="directorio.html?tienda=Mobo" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Mobo</a></li>
                        <li><a href="directorio.html?tienda=Petco" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Petco</a></li>
                        <li><a href="directorio.html?tienda=Juguetrón" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Juguetrón</a></li>
                    </ul>

                    <!-- Tecnología -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Tecnología</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Samsung" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Samsung</a></li>
                        <li><a href="directorio.html?tienda=iShop" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> iShop</a></li>
                        <li><a href="directorio.html?tienda=Steren" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Steren</a></li>
                        <li><a href="directorio.html?tienda=CAC%20Telcel" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> CAC Telcel</a></li>
                    </ul>

                    <!-- Tiendas Departamentales -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Tiendas Departamentales</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Sanborns" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Sanborns</a></li>
                        <li><a href="directorio.html?tienda=Sears" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Sears</a></li>
                        <li><a href="directorio.html?tienda=Liverpool" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Liverpool</a></li>
                        <li><a href="directorio.html?tienda=Casa%20Ideas" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Casa Ideas</a></li>
                    </ul>

                    <!-- Ópticas -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Ópticas</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Soley" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Soley</a></li>
                        <li><a href="directorio.html?tienda=Sunglass%20Hut" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Sunglass Hut</a></li>
                        <li><a href="directorio.html?tienda=%2BVision" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> +Vision</a></li>
                        <li><a href="directorio.html?tienda=Ópticas%20Devlyn" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Ópticas Devlyn</a></li>
                        <li><a href="directorio.html?tienda=Dart%20Occhiali" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Dart Occhiali</a></li>
                        <li><a href="directorio.html?tienda=Ópticas%20Lux" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Ópticas Lux</a></li>
                    </ul>

                    <!-- Servicios -->
                    <h4 class="text-[9px] font-bold uppercase tracking-[0.25em] text-plaza-gold border-b border-plaza-gold/30 pb-2 mb-4">Servicios</h4>
                    <ul class="space-y-2 mb-8">
                        <li><a href="directorio.html?tienda=Banbajio" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> Banbajio</a></li>
                        <li><a href="directorio.html?tienda=BBVA%20Bancomer" class="text-sm text-gray-600 hover:text-plaza-purple transition-colors flex items-center gap-2"><span class="text-[9px] text-gray-300">▶</span> BBVA Bancomer</a></li>
                    </ul>
                </div>

            </div>"""
content = re.sub(r'<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-14">.*?</div>\s*<!-- Espacios disponibles también al pie del directorio rápido -->', new_grid + '\n\n            <!-- Espacios disponibles también al pie del directorio rápido -->', content, flags=re.DOTALL)

with open('index.html', 'w', encoding='utf-8') as f:
    f.write(content)
