# Plaza Universidad - Frontend Delivery 🏢

## 📋 Descripción

Este es el **frontend completo** de Plaza Universidad, diseñado con el color rosa/rojo de **Grupo Carso** (`rgb(219 36 44)`).

Todas las páginas están **listas para conectar con el backend PHP** que ya existe.

---

## 📁 Archivos Incluidos

```
frontend_delivery/
├── index.html              ← Home con hero, eventos, tiendas, promociones
├── directorio.html         ← Directorio con 20 tiendas de ejemplo
├── eventos.html            ← 8 eventos de ejemplo
├── promociones.html        ← 9 promociones de ejemplo
├── contacto.html           ← Formulario de contacto
├── preview_completo.html   ← Preview con todos los datos
└── README.md               ← Este archivo
```

---

## 🎨 Diseño Implementado

✅ **Color principal**: `rgb(219 36 44)` (Grupo Carso)  
✅ **Tipografía**: Montserrat (Google Fonts)  
✅ **Header simplificado**: Directorio | Eventos | Promociones | Contacto  
✅ **Logo "C"** visible en todas las páginas  
✅ **Responsive** con barra inferior móvil  
✅ **Datos de ejemplo** realistas (listos para reemplazar con backend)

---

## 🔌 Conexión con Backend PHP

### **IMPORTANTE**: Actualmente las páginas tienen **datos falsos** (hardcodeados).

Para conectar con el backend PHP, debes reemplazar los datos de ejemplo con llamados AJAX/fetch:

### 1. **Directorio** (`directorio.html`)

**Datos actuales** (línea ~220):
```javascript
const storesDB = [
    { id: 1, name: "Sears", cat: "Moda", ... }
];
```

**Reemplazar por**:
```javascript
fetch('listadoLocatarios.php?centroComercial=10')
    .then(response => response.json())
    .then(data => renderStores(data));
```

---

### 2. **Eventos** (`eventos.html`)

**Datos actuales** (línea ~100):
```javascript
const eventsDB = [
    { id: 1, title: "Fashion Week", ... }
];
```

**Reemplazar por**:
```javascript
fetch('eventosypromociones.php?tipo=evento&centroComercial=10')
    .then(response => response.json())
    .then(data => renderEvents(data));
```

---

### 3. **Promociones** (`promociones.html`)

**Datos actuales** (línea ~100):
```javascript
const promosDB = [
    { id: 1, title: "Venta Nocturna", ... }
];
```

**Reemplazar por**:
```javascript
fetch('eventosypromociones.php?tipo=promocion&centroComercial=10')
    .then(response => response.json())
    .then(data => renderPromos(data));
```

---

### 4. **Contacto** (`contacto.html`)

**Formulario actual** (línea ~180):
El formulario está **comentado** para conectar con `mail.php`.

**Descomentar** el código real (líneas ~195-215):
```javascript
fetch('mail.php', {
    method: 'POST',
    body: formData
})
.then(response => response.json())
.then(data => {
    // Manejo de respuesta
});
```

---

## 🚀 Instalación

### **Opción 1: Solo Frontend (Preview)**

1. Abre cualquier archivo `.html` en tu navegador
2. Verás los datos de ejemplo

### **Opción 2: Con Backend PHP**

1. Copia todos los archivos `.html` a la carpeta del backend PHP
2. Asegúrate de que los archivos PHP estén en la misma carpeta:
   - `listadoLocatarios.php`
   - `eventosypromociones.php`
   - `mail.php`
3. Configura la base de datos con `Bd_CCWeb_utf8.sql`
4. Reemplaza los datos de ejemplo con los llamados AJAX (ver sección anterior)
5. Abre `index.html` en tu servidor PHP

---

## 📊 Datos de Ejemplo Incluidos

### **Directorio**: 20 tiendas
- Sears, Liverpool, Zara, H&M, Starbucks, Cinépolis, etc.

### **Eventos**: 8 eventos
- Fashion Week, Concierto de Verano, Expo Tecnología, etc.

### **Promociones**: 9 promociones
- Venta Nocturna (50%), 2x1 en Café, Black Friday (40%), etc.

---

## 🎯 Próximos Pasos

1. **Revisar el diseño**: Abre `preview_completo.html` para ver todo junto
2. **Conectar con backend**: Sigue las instrucciones de la sección "Conexión con Backend PHP"
3. **Probar en servidor**: Sube los archivos a tu servidor PHP
4. **Validar con Fernanda**: Muestra el resultado final

---

## 📞 Soporte

Si tienes dudas sobre cómo conectar con el backend, revisa los archivos PHP existentes:
- `listadoLocatarios.php` → Devuelve JSON con tiendas
- `eventosypromociones.php` → Devuelve JSON con eventos/promociones
- `mail.php` → Procesa el formulario de contacto

---

## ✅ Checklist de Entrega

- [x] Diseño aprobado implementado
- [x] Color Carso (`rgb(219 36 44)`)
- [x] Header simplificado (Directorio | Eventos | Promociones | Contacto)
- [x] Logo "C" visible
- [x] Datos de ejemplo realistas
- [x] Responsive (desktop + mobile)
- [ ] **Conectar con backend PHP** (pendiente - instrucciones incluidas)

---

**Desarrollado para Plaza Universidad | Grupo Carso**  
**Fecha**: Febrero 2026
