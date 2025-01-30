# Subida de Archivos con Validación

Este proyecto tiene como objetivo aprender y aplicar la validación de archivos, incluyendo la verificación del tipo y tamaño, así como su gestión y almacenamiento en una ruta específica.

## Características
- Validación del tipo y tamaño de archivo.
- Creación automática del directorio `files` si no existe (excluido en `.gitignore`).
- Conexión a una base de datos MySQL para almacenar información de los archivos subidos.

## Base de Datos
Se debe crear una base de datos cuyo nombre puede ser configurado en el archivo de conexión. La única tabla requerida es `archivos`, definida de la siguiente manera:

```sql
CREATE TABLE archivos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    ruta VARCHAR(500) NOT NULL,
    fecha_subida TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Instalación y Uso
1. Clona este repositorio en tu máquina local.
2. Configura la conexión a la base de datos en el archivo correspondiente.
3. Asegúrate de ejecutar el script SQL anterior para crear la tabla.
4. Ejecuta el proyecto en un servidor compatible con PHP (Apache, Nginx, etc.).

¡Listo! Ahora puedes probar la subida y validación de archivos. 🚀