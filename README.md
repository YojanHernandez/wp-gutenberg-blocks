# Gutenberg Blocks Examples

Un plugin de WordPress que demuestra ejemplos de bloques personalizados para el editor Gutenberg.

## Descripción

Este plugin contiene una colección de bloques personalizados creados con la API moderna de bloques de WordPress. Está diseñado como un proyecto educativo para mostrar las mejores prácticas en el desarrollo de bloques Gutenberg.

## Características

- ✅ Desarrollado con la API moderna de bloques (Block API v3)
- ✅ Configuración moderna con @wordpress/scripts
- ✅ Estructura de proyecto organizada
- ✅ Ejemplos prácticos y reutilizables
- ✅ Compatibilidad con WordPress 6.0+

## Requisitos

- WordPress 6.0 o superior
- PHP 7.4 o superior
- Node.js 18+

## Instalación

### Para Usuarios

1. Descarga el plugin desde la página de releases
2. Sube el archivo ZIP a tu sitio WordPress en `Plugins > Añadir nuevo > Subir plugin`
3. Activa el plugin desde el panel de administración

### Para Desarrolladores

1. Clona este repositorio en tu directorio de plugins:

```bash
cd wp-content/plugins/
git clone [URL_DEL_REPOSITORIO] wp-gutenberg-blocks
cd wp-gutenberg-blocks
```

2. Instala las dependencias:

```bash
npm install
```

3. Construye los bloques:

```bash
npm run build
```

4. Activa el plugin desde el panel de administración de WordPress

## Desarrollo

### Comandos Disponibles

```bash
# Modo desarrollo (watch mode)
npm run start

# Construcción para producción
npm run build
```

### Estructura del Proyecto

```
wp-gutenberg-blocks/
├── src/
│   └── blocks/
│       └── hello-world/
├── plugin.php                 # Archivo principal del plugin
├── package.json               # Dependencias y scripts
└── README.md                  # Este archivo
```

### Crear un Nuevo Bloque

1. Crea una nueva carpeta en `src/blocks/nombre-del-bloque/`
2. Añade un archivo `block.json` con la configuración del bloque
3. Crea un archivo `index.js` with el código del bloque
4. Registra el bloque en `plugin.php`
5. Ejecuta `npm run build` para compilar

Ejemplo básico de `block.json`:

```json
{
  "$schema": "https://schemas.wp.org/trunk/block.json",
  "apiVersion": 3,
  "name": "tu-namespace/nombre-bloque",
  "version": "0.1.0",
  "title": "Título del Bloque",
  "category": "widgets",
  "icon": "smiley",
  "description": "Descripción del bloque",
  "textdomain": "tu-textdomain",
  "editorScript": "file:./index.js"
}
```

## Bloques Incluidos

### Hello World Block

Un bloque básico de ejemplo que muestra texto personalizable.

## Contribuir

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -am 'Añade nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Crea un Pull Request

### Estándares de Código

- Sigue los [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- Usa ESLint para JavaScript
- Documenta tu código con JSDoc cuando sea apropiado

## Recursos Útiles

- [Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [@wordpress/scripts Documentation](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)
- [Block.json Reference](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/)
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)

## Changelog

### 1.0.0

- Lanzamiento inicial
- Bloque Hello World básico
- Configuración con @wordpress/scripts

## Soporte

Para reportar bugs o solicitar funcionalidades, por favor abre un issue en el repositorio.

## Autor

Desarrollado como proyecto educativo para la comunidad WordPress.

## Licencia

Este proyecto está licenciado bajo GPL v2 o posterior. Ver el archivo [LICENSE](LICENSE) para más detalles.
