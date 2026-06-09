# Plaza Universidad - Sitio Web Oficial

![Plaza Universidad](https://i.imgur.com/JtMTpuI.png)

## Descripcion del Proyecto

Rediseno y desarrollo frontend completo del sitio web de **Plaza Universidad**, uno de los centros comerciales mas iconicos del sur de la Ciudad de Mexico (fundado en 1969). Proyecto desarrollado para **HGroup** bajo los estandares de identidad corporativa de **PlaniGrupo / INCARSO**.

**URL del sitio:** [josegaspard.github.io/hgroup-plaza-universidad](https://josegaspard.github.io/hgroup-plaza-universidad/)

---

## Paginas del Sitio

| Pagina | Archivo | Descripcion |
|--------|---------|-------------|
| Inicio | `index.html` | Hero con imagen de la plaza, mapa interactivo SVG (3 vistas), directorio rapido con 100+ tiendas organizadas por categoria, seccion de renta de locales |
| Directorio | `directorio.html` | Catalogo visual completo de tiendas con filtros por categoria (Todo, Moda, Gastronomia, Variedad), buscador en tiempo real, modal de detalle por tienda con redes sociales |
| Eventos | `eventos.html` | Seccion de eventos proximos y pasados con modal de detalle y confirmacion de asistencia |
| Promociones | `promociones.html` | Grid de promociones activas con modal de detalle, imagenes de poster y vigencia |
| Contacto | `contacto.html` | Atencion al cliente, formulario de experiencia, avisos operativos, seccion de renta de locales con formulario, mapa de Google Maps embebido |

---

## Tecnologias Utilizadas

- **HTML5 Semantico** - Estructura limpia y optimizada para SEO
- **Tailwind CSS (CDN)** - Framework de utilidad para diseno responsive y consistente
- **JavaScript Vanilla** - Logica de interaccion ligera: filtros, modales, mapa interactivo, menu mobile
- **jQuery 3.2.1** - Validacion de formularios y filtros del directorio
- **Bootstrap 3.3.7 JS** - Compatibilidad con sistema legacy de modales (integracion con BD)
- **Font Awesome 6.4** - Iconografia vectorial
- **Google Fonts** - Playfair Display (serif) + Lato (sans-serif)
- **Google Maps Embed API** - Mapa de ubicacion en pagina de contacto

---

## Arquitectura y Estructura

```
hgroup-plaza-universidad/
├── index.html              # Pagina principal
├── directorio.html         # Catalogo de tiendas
├── eventos.html            # Eventos y entretenimiento
├── promociones.html        # Promociones activas
├── contacto.html           # Contacto y renta de locales
├── mapa.html               # Mapa de locales (vista independiente)
├── Scripts/
│   ├── main.js             # Filtros del directorio y busqueda
│   └── jquery.validate.min.js
├── images/
│   ├── locales/            # Fotos de cada tienda
│   ├── mapas/              # SVGs del mapa interactivo
│   └── promociones/        # Imagenes de promociones
├── logos/
│   ├── logo.png            # Logo principal Plaza Universidad
│   └── icono.ico           # Favicon
└── *.php                   # Endpoints del servidor (integracion con BD)
```

---

## Funcionalidades Implementadas

### Diseno y UX
- Diseno 100% responsive (mobile-first hasta pantallas 4K)
- Paleta corporativa: morado (#4c1a74), dorado (#fbbd1a), magenta (#b21a56)
- Tipografia editorial: Playfair Display para headings, Lato para cuerpo
- Micro-interacciones y transiciones suaves en hover
- Menu mobile overlay con animacion de apertura/cierre

### Mapa Interactivo
- 3 vistas conmutables: Planta Baja, Estacionamiento Nivel, PB Exterior
- SVGs estaticos como placeholder visual
- Preparado para integracion con SVG dinamico desde BD (ver comentarios en codigo)

### Directorio de Tiendas
- Grid responsive de 2/3/4 columnas segun viewport
- Filtros por categoria: Todo, Moda, Gastronomia, Variedad (catch-all)
- Buscador en tiempo real por nombre de tienda
- Modal de detalle con foto, ubicacion, horario y redes sociales
- Deep-linking via query parameter (`?tienda=NombreTienda`)

### Sistema de Modales
- Modales personalizados con backdrop blur y animaciones scale/opacity
- Boton de cierre accesible en mobile (posicion fija, area de toque grande)
- Scroll del body bloqueado al abrir modal

### Formularios
- Formulario de experiencia del cliente (POST a `enviarCorreo.php`)
- Formulario de solicitud de renta de locales
- Validacion de campos requeridos
- Checkbox de Aviso de Privacidad

### Integracion con Sistema Legacy
- Modal Bootstrap oculto para carga AJAX de datos de locatarios
- IDs y nombres de campos alineados con `enviarCorreo.php`
- Compatibilidad con `listadoLocatarios.php` y `filtroGiroComercial.php`

---

## Datos de Contacto del Centro Comercial

**Direccion:** Av. Universidad 1000, Col. Santa Cruz Atoyac, Benito Juarez, CDMX 03310

**Atencion al Cliente:**
- Email: aux.puniversidad@incarso.com
- Telefono: (55) 1103 1521

**Renta de Locales (Espacios Disponibles):**
- Email: informacion.comercial@incarso.com
- Telefonos: (55) 5474 1430 / (55) 5474 1680

---

## Historial de Cambios Recientes

### Abril 2026 - Entregable con correcciones del cliente
- Eliminado contacto WhatsApp de la seccion Atencion al Cliente
- Actualizados datos de renta en todas las paginas (nuevo email y telefonos)
- Corregido filtro de Gastronomia en directorio (estaba roto, no mostraba tiendas)
- Filtro Variedad ahora funciona como catch-all (todo lo que no es Moda ni Gastronomia)
- Eliminados eventos de ejemplo para evitar confusion al montar el sitio
- Corregido mapa modal con estructura HTML rota (iframe fuera del contenedor)

### Correcciones tecnicas
- Fix conflicto `hidden`+`flex` en menu mobile (todas las paginas)
- Fix animacion de modales (mismatch entre HTML y JS)
- Agregados alt attributes a 44 imagenes para accesibilidad
- Corregido hero de promociones (decia "Eventos" en vez de "Promociones")
- Eliminada clase Tailwind invalida (`hover:shadow-3xl`)
- Removidos favicons duplicados y CSS muerto

---

## Desarrollo y Creditos

![HGroup](https://i.imgur.com/bHO9Mfd.png)

**Desarrollado por:**

**Jose Gaspard**
Full Stack Developer
[josegaspard.dev](https://josegaspard.dev)

Proyecto desarrollado integramente por Jose Gaspard para HGroup.
Diseno, maquetacion, programacion frontend e integracion con sistemas legacy.

---

**Cliente:**

![PlaniGrupo](https://i.imgur.com/dkoatsu.png)

---

&copy; 2026 HGroup / Jose Gaspard. Todos los derechos reservados.
