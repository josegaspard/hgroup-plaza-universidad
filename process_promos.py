import re
import os
from PIL import Image

# 1. Image processing
desktop_dir = os.path.expanduser("~/Desktop/promociones plaza universidad/")
tgt_dir = "images/promociones"
os.makedirs(tgt_dir, exist_ok=True)

img_files = ["C---IG-UNI----(1350-x-1080px).jpg", "E---Face-UNI----(1200-x-1200px).jpg"]
new_img_names = ["evento1.jpg", "evento2.jpg"]

for img_f, new_name in zip(img_files, new_img_names):
    src_path = os.path.join(desktop_dir, img_f)
    if os.path.exists(src_path):
        img = Image.open(src_path)
        # Resize if width > 800
        if img.width > 800:
            ratio = 800.0 / img.width
            new_height = int(img.height * ratio)
            img = img.resize((800, new_height), Image.Resampling.LANCZOS)
        
        # Save compressed
        img.save(os.path.join(tgt_dir, new_name), "JPEG", quality=80, optimize=True)

# 2. Update promociones.html
with open('promociones.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Replace Header
content = re.sub(
    r'Eventos\s+&amp;\s+<span\s+class="text-plaza-gold\s+font-light">Actividades\s+del\s+Mall</span>',
    'Eventos y <span class="text-plaza-gold font-light">Activaciones</span>',
    content
)

# Fix Premiere
content = content.replace('Première', 'Premiére')
content = content.replace('Premières', 'Premiéres')

# Replace the grid content
new_grid = """<div id="promos-grid" class="columns-1 md:columns-2 gap-8 space-y-8 max-w-5xl mx-auto">
                    <!-- Evento 1 -->
                    <div onclick="openPromoModal('Evento Especial', 'Plaza Universidad', 'images/promociones/evento1.jpg', '¡Te invitamos a disfrutar de grandes sorpresas en Plaza Universidad!', '', '')"
                        class="group break-inside-avoid relative cursor-pointer bg-white overflow-hidden fade-in-up">
                        <div class="relative overflow-hidden shadow-lg border border-gray-100 p-2">
                            <img src="images/promociones/evento1.jpg"
                                class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-[1.02]">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                            </div>
                            <div class="absolute top-6 right-6 bg-plaza-gold px-4 py-2">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-plaza-black">Evento</span>
                            </div>
                            <div
                                class="absolute bottom-8 left-8 right-8 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
                                <h3 class="text-3xl font-serif">Gran Evento</h3>
                                <div
                                    class="h-px w-0 bg-white mt-4 group-hover:w-16 transition-all duration-500 delay-100">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Evento 2 -->
                    <div onclick="openPromoModal('Activación Especial', 'Plaza Universidad', 'images/promociones/evento2.jpg', 'Ven a Plaza Universidad y forma parte de nuestra activación exclusiva.', '', '')"
                        class="group break-inside-avoid relative cursor-pointer bg-white overflow-hidden fade-in-up">
                        <div class="relative overflow-hidden shadow-lg border border-gray-100 p-2">
                            <img src="images/promociones/evento2.jpg"
                                class="w-full h-auto object-cover transition-transform duration-1000 group-hover:scale-[1.02]">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition-opacity">
                            </div>
                            <div class="absolute top-6 right-6 bg-white px-4 py-2">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-plaza-black">Activación</span>
                            </div>
                            <div
                                class="absolute bottom-8 left-8 right-8 text-white transform transition-transform duration-500 group-hover:-translate-y-2">
                                <h3 class="text-3xl font-serif">Activación Especial</h3>
                                <div
                                    class="h-px w-0 bg-white mt-4 group-hover:w-16 transition-all duration-500 delay-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>"""

# Find grid opening and closing
# <div id="promos-grid" ...> ... </div>
import bs4
soup = bs4.BeautifulSoup(content, "html.parser")
grid_div = soup.find('div', id='promos-grid')
if grid_div:
    new_grid_soup = bs4.BeautifulSoup(new_grid, "html.parser")
    grid_div.replace_with(new_grid_soup)

# Write back
with open('promociones.html', 'w', encoding='utf-8') as f:
    f.write(str(soup))
