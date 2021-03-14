# Simple Crud en laravel

## Instalaciones.

* Descargamos e instalamos xampp que ya incluye php y mysql.
    - [Descargar XAMPP!](https://www.apachefriends.org/es/index.html)
* Descargamos e instalamos composer.
    - [Descargar Composer!](https://getcomposer.org/download/)

## Como Iniciar.

* Clonamos el repositorio.
* Instalamos dependencias con el comando : composer install
* Creamos base de datos llamada laravel en mysql.
* Corremos las migraciones: php artisan migrate
* corremo el proyecto : php artisan serve

## Rutas
* GET     api/productos
* GET     api/productos/{id}
* POST    api/productos/create
* PUT     api/productos/update/{id}
* DELETE  api/productos/delete/{id}

## Ejemplo de envio de data
POST    api/productos/create
{
    "nombre":"producto 2",
    "descripcion":"descripcion 2"
}

GET    api/productos/1

PUT     api/productos/update/1
{    
    "nombre":"juas",
    "descripcion":"juas juas"
}

DELETE api/productos/delete/1
