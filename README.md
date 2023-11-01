# Acerca de este proyecto
*Esta es una prueba tecnica realizada en Laravel para la empresa Beeping, se deja en enunciado al final de este documento.*

## Requisitos para ejecutar
1. [NPM](https://nodejs.org/en/download)
2. [MySQL](https://www.mysql.com/downloads/)
3. [PHP V>7.3.0](https://www.php.net/manual/en/install.php)

## Instalacion

1. Descargar el repositorio
2. Configurar .env con conexion a base de datos
3. Instalar dependencias

````
npm install
````

4. Ejecutar migraciones

````
php artisan migrate
````

5. Insertar datos mediante Seeders

````
php artisan db:seed --class=ProductsSeeder
php artisan db:seed --class=OrdersSeeder
php artisan db:seed --class=OrderLinesSeeder
````
6. Iniciar webpack en modo desarrollo

````
npm run watch
````

7. Iniciar servidor Laravel en modo desarrollo

````
php artisan serve
````

8. Iniciar worker para CalculateTotalJob

````
php artisan queue:work
````


##E Enunciado

````

* Instalar Laravel 8 (php 7.4)
* Livewire
* Crear Migraciones
* Añadir a la DB 20 registros de “orders” con sus “lines” y 10 de “products”
* Hacer comando con una consulta con eloquent que:
    Calcule el coste total de todas las órdenes de la DB, para calcular este coste hay que multiplicar el order_line “qty” por el “product cost”.
    Esta consulta debe ser ejecutada de forma asíncrona a través de un JOB de laravel en DB.
    Al ejecutar las colas imprimir el resultado en la terminal.
* Para el front con livewire mostrar un listado de todas las órdenes en una tabla: order_ref, customer_name, total qty
* Crear un mini instructivo con la configuración principal del .env

Tener en cuenta que cada tarea debe ser registrada en una rama de git.
Enviar el link del proyecto (repositorio) al reclutador/a

Tablas:
1. orders
    * ID (bigint)
    * order_ref (varchar)
    * customer_name (varchar)
    * created_at (timestamp)
    * updated_at (timestamp)

2. orders_lines
    * ID (bigint)
    * order_id(bigint)
    * qty (int)
    * product_id(bigint)
    * created_at (timestamp)
    * updated_at (timestamp)

3. products
    * ID (bigint)
    * name (varchar)
    * cost (double)
    * created_at (timestamp)
    * updated_at (timestamp)
````