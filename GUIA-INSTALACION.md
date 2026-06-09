# Guía de Instalación — Plaza Universidad (Frontend)

**Preparado por:** Hack Digital Strategy  
**Fecha:** Abril 2026  
**Versión:** 1.0  

---

## 1. Descripción General

Este paquete contiene el **frontend completo** de la página web de Plaza Universidad, diseñado para integrarse directamente con el **Gestor de Contenidos (backend PHP)** de Inmuebles Carso.

El frontend fue desarrollado con:
- **Tailwind CSS** (diseño moderno, responsive, mobile-first)
- **Bootstrap 3** (compatibilidad con los modales y listados AJAX del backend)
- **jQuery 3.2.1** (interacciones, validación de formularios, AJAX)

---

## 2. Requisitos Previos

| Requisito | Detalle |
|---|---|
| Servidor | Azure (Windows/IIS) o cualquier servidor con PHP |
| PHP | Versión 5.6 o superior |
| Gestor de Contenidos | La carpeta `00-gestorContenidos` debe existir **un nivel arriba** de esta carpeta |
| Base de datos | SQL Server (la misma que usan las demás plazas) |
| Centro Comercial ID | El ID asignado a Plaza Universidad en la base de datos |

---

## 3. Estructura de Carpetas en el Servidor

```
servidor/
├── 00-gestorContenidos/          ← Backend compartido (ya existe)
│   ├── class/
│   │   ├── conexion.php
│   │   └── conexionCorreos.php
│   └── ...
│
├── cc_plazaUniversidad/          ← ESTA CARPETA (renombrar si es necesario)
│   ├── index.php
│   ├── directorio.php
│   ├── mapa.php
│   ├── contacto.php
│   ├── eventosypromociones.php
│   ├── buscar.php
│   ├── servicios.php
│   ├── header.php
│   ├── footer.php
│   ├── menu.php
│   ├── menuXS.php
│   ├── logos-top.php
│   ├── modales.php
│   ├── locatarioModal.php
│   ├── listadoLocatarios.php
│   ├── filtroGiroComercial.php
│   ├── filtroGiroComercialLocal.php
│   ├── publicidadModal.php
│   ├── enviarCorreo.php
│   ├── AvisodePrivacidad.php
│   ├── mail.php
│   ├── logo.php
│   ├── web.config
│   ├── style.css
│   ├── estilo-bid.css
│   ├── css/
│   │   ├── bootstrap.css
│   │   ├── Gridmvc.css
│   │   ├── personalizados.css
│   │   ├── font-awesome.css
│   │   └── fonts/                ← Glyphicons, FontAwesome, tipografías
│   ├── Scripts/
│   │   ├── jquery-3.2.1.js
│   │   ├── bootstrap.js
│   │   ├── modernizr-2.8.3.js
│   │   ├── respond.js
│   │   ├── Gridmvc.js
│   │   ├── logoLocatario.js
│   │   ├── carrusel.js
│   │   ├── jquery.validate.min.js
│   │   └── main.js
│   ├── logos/
│   │   ├── logo.png              ← Logo de Plaza Universidad
│   │   ├── logo.webp
│   │   ├── icono.ico             ← Favicon
│   │   ├── logo_InmueblesCarso.png
│   │   └── btnMenu.png
│   ├── images/
│   │   ├── locales/              ← Fotos de tiendas y exteriores
│   │   ├── Locatarios/           ← Logos de locatarios (del backend)
│   │   ├── LocatariosResp/       ← Logos responsivos
│   │   ├── promociones/          ← Imágenes de eventos/promos
│   │   ├── mapas/                ← SVGs del mapa (para index.html)
│   │   ├── logo.png
│   │   ├── footer.jpg
│   │   ├── footer.png
│   │   └── imagen_Generica.jpg   ← Imagen por defecto si no hay foto
│   └── mapa/
│       ├── plantaBaja.svg        ← SVG planta baja (de Insurgentes, reemplazar)
│       └── plantaAlta.svg        ← SVG planta alta (de Insurgentes, reemplazar)
```

---

## 4. Pasos de Instalación

### Paso 1: Cambiar el ID del Centro Comercial

Abrir el archivo **`header.php`**, línea 2:

```php
$CentroComercial = '10';
```

Cambiar `'10'` por el **ID que corresponda a Plaza Universidad** en la base de datos del Gestor de Contenidos.

> **IMPORTANTE:** Este es el único cambio obligatorio para que todo el sitio funcione. Todos los demás archivos PHP leen este valor automáticamente.

### Paso 2: Colocar la carpeta en el servidor

1. Subir toda la carpeta al servidor Azure
2. Asegurarse de que quede **al mismo nivel** que `00-gestorContenidos`
3. Verificar que la ruta `../00-gestorContenidos/class/conexion.php` sea accesible desde esta carpeta

### Paso 3: Insertar los SVGs del Mapa Interactivo

Abrir el archivo **`mapa.php`** y buscar los dos bloques que dicen:

```html
<!-- SVG del mapa de Planta Baja de Plaza Universidad se inserta aqui -->
```

y

```html
<!-- SVG del mapa de Segundo Piso de Plaza Universidad se inserta aqui -->
```

Reemplazar cada bloque placeholder (el `<div>` con el ícono y texto "Pendiente") por el **SVG interactivo** correspondiente de Plaza Universidad.

**Requisitos del SVG:**
- Cada local debe tener un polígono con clase **`.localP`**
- El ID de cada polígono debe seguir el formato: `{idLocatario}PlantaBaja` o `{idLocatario}PlantaAlta`
- El ID del locatario debe coincidir con el `idCatLocatario` de la base de datos

**Ejemplo de polígono:**
```xml
<polygon class="localP" id="123PlantaBaja" points="100,200 200,200 200,300 100,300" fill="#f8f3e8" />
```

### Paso 4: Configurar el Dominio (web.config)

Abrir **`web.config`** y:

1. Cambiar `plazauniversidad.com.mx` por el dominio real
2. Cambiar `enabled="false"` a `enabled="true"` en la regla de redirect

```xml
<rule name="Redirecciona a URL del certificado registrado" stopProcessing="true" enabled="true">
    <conditions>
        <add input="{HTTP_HOST}" pattern="^sudominio\.com.mx$" negate="true" />
    </conditions>
    <action type="Redirect" url="https://sudominio.com.mx/{R:1}" />
</rule>
```

### Paso 5: Verificar Imágenes de Locatarios

El backend carga las imágenes de los locatarios desde:
- `images/Locatarios/` — Logos principales
- `images/LocatariosResp/` — Logos responsivos
- `images/imagen_Generica.jpg` — Imagen por defecto

Verificar que las imágenes de los locatarios de Universidad estén cargadas en estas carpetas o que el backend las sirva desde la base de datos.

### Paso 6: Configurar el Correo de Contacto

El formulario de contacto envía correos a través de `enviarCorreo.php`, que usa `../00-gestorContenidos/class/conexionCorreos.php`.

Verificar que:
- El correo de la plaza esté configurado en la base de datos (función `emailCC()`)
- El servidor SMTP esté configurado en `conexionCorreos.php`

---

## 5. Archivos que NO se deben modificar

| Archivo | Razón |
|---|---|
| `header.php` | Solo cambiar el ID del centro comercial (línea 2) |
| `menu.php` | Navegación principal, ya configurada |
| `footer.php` | Footer con datos de Universidad |
| `modales.php` | Modales Bootstrap necesarios para AJAX |
| `locatarioModal.php` | Endpoint AJAX para detalle de tiendas |
| `listadoLocatarios.php` | Endpoint AJAX para listado del mapa |
| `filtroGiroComercial.php` | Endpoint AJAX para filtro por categoría (mapa) |
| `filtroGiroComercialLocal.php` | Endpoint AJAX para filtro por categoría (directorio) |
| `publicidadModal.php` | Endpoint AJAX para detalle de promociones |
| `enviarCorreo.php` | Endpoint para envío de correo de contacto |
| `main.js` | Validación del formulario y filtros del directorio |

---

## 6. Páginas del Sitio

| URL | Archivo | Descripción |
|---|---|---|
| `/` | `index.php` | Página principal con hero, directorio rápido, espacios disponibles |
| `/directorio.php` | `directorio.php` | Directorio completo con filtro por categoría |
| `/mapa.php` | `mapa.php` | Mapa interactivo con SVG por piso |
| `/eventosypromociones.php` | `eventosypromociones.php` | Eventos y promociones desde el backend |
| `/contacto.php` | `contacto.php` | Formulario de contacto con mapa de Google |
| `/servicios.php` | `servicios.php` | Página de servicios de la plaza |
| `/buscar.php` | `buscar.php` | Búsqueda/directorio alternativo |
| `/AvisodePrivacidad.php` | `AvisodePrivacidad.php` | Aviso de privacidad (modal) |

---

## 7. Funciones del Backend Utilizadas

Estas funciones son llamadas desde los archivos PHP y deben existir en `../00-gestorContenidos/class/conexion.php`:

| Función | Uso |
|---|---|
| `nombreCC($id)` | Nombre del centro comercial |
| `descripcionCC($id)` | Meta description |
| `emailCC($id)` | Email de contacto |
| `analyticsCC($id)` | Código de Google Analytics |
| `directorioCC2($id, $giro)` | Listado de tiendas HTML |
| `giroComercial($id)` | Opciones de categorías (select) |
| `locatariosMapa2PRB($id, $giro, $piso)` | Listado de tiendas por piso para el mapa |
| `informacionLocatario($id, $idLoc, $origen, $tipo)` | Detalle de una tienda (modal) |
| `publicaciones($id)` | Listado de eventos/promociones |
| `informacionPublicacion($id, $idPub)` | Detalle de una publicación (modal) |
| `urlInmuebles($id)` | URL del sitio de Inmuebles Carso |
| `redesSocialesCCXS($id)` | Redes sociales (menú mobile legacy) |
| `facebook($id)` | URL de Facebook |
| `twitter($id)` | URL de Twitter |
| `facebookIni()` | SDK de Facebook |
| `scriptTitle()` | Scripts adicionales |
| `carruselInicio()` | Carrusel de la página principal |

---

## 8. Colores de la Marca

| Color | Hex | Uso |
|---|---|---|
| Purple (principal) | `#4c1a74` | Menú, acentos, hover |
| Gold (secundario) | `#fbbd1a` | Títulos, botones, decoraciones |
| Magenta | `#b21a56` | Acentos alternos |
| Dark (base) | `#2d0a44` | Fondos oscuros, footer |

---

## 9. Datos de Contacto de la Plaza (configurados en el frontend)

- **Dirección:** Av. Universidad 1000, Col. Santa Cruz Atoyac, Benito Juárez, CDMX 03310
- **Teléfonos:** (55) 5474 1430 / (55) 5474 1680
- **Email comercial:** informacion.comercial@incarso.com
- **Google Maps:** Embebido en `contacto.php`

---

## 10. Notas Técnicas

1. **Tailwind CSS** se carga via CDN (`cdn.tailwindcss.com`) con `important: true` para evitar conflictos con Bootstrap 3.

2. **Bootstrap 3 CSS** se carga localmente desde `css/bootstrap.css` porque el backend inyecta HTML con clases Bootstrap via AJAX (modales de tiendas, listados, etc.).

3. **Font Awesome 6** se carga via CDN para los íconos modernos del diseño. **Font Awesome 4** se carga localmente (`css/font-awesome.css`) porque el backend puede usarlo en el HTML generado.

4. El archivo **`style.css`** contiene los colores específicos de Plaza Universidad que aplican a los elementos del backend (menú horizontal, footer gradient, formularios, mapa).

5. Los archivos `.html` (`index.html`, `directorio.html`, etc.) son versiones estáticas para previsualización en GitHub Pages. **No se usan en producción** — el servidor ejecuta los `.php`.

6. La carpeta `mapa/` contiene los SVGs y PSDs de referencia de Plaza Insurgentes. Se incluyen como referencia para el equipo de diseño que generará los SVGs de Universidad.

---

## 11. Checklist de Verificación Post-Instalación

- [ ] El ID del centro comercial está configurado en `header.php`
- [ ] La carpeta está al mismo nivel que `00-gestorContenidos`
- [ ] La página principal (`index.php`) carga correctamente
- [ ] El directorio (`directorio.php`) muestra las tiendas desde la base de datos
- [ ] Al hacer clic en una tienda, se abre el modal con su información
- [ ] El filtro por categoría funciona en el directorio
- [ ] El mapa (`mapa.php`) muestra los listados por piso
- [ ] Los SVGs interactivos están insertados (si ya fueron generados)
- [ ] El formulario de contacto (`contacto.php`) envía correos correctamente
- [ ] Los eventos y promociones (`eventosypromociones.php`) cargan desde el backend
- [ ] El sitio se ve correctamente en móvil (iPhone, Android)
- [ ] El favicon aparece en la pestaña del navegador
- [ ] HTTPS funciona correctamente
- [ ] El dominio redirige correctamente (web.config)

---

**Soporte técnico:**  
Hack Digital Strategy  
Fernanda Portilla — fernanda.p@hackdigital.mx
