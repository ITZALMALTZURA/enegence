# Prueba Técnica - Laravel 12 + COPOMEX

Este proyecto es una prueba técnica para mostrar los **estados y municipios de México** usando la API de COPOMEX, con **Laravel 12, MySQL y Bootstrap 5**.

## Requisitos

- PHP >= 8.1
- Composer
- MySQL
- Laravel >= 10

## Instalación y ejecución

1. **Clonar el repositorio**

git clone https://github.com/ITZALMALTZURA/enegence.git
cd enegence

2. **Instalar dependencias (opccional)**
composer install

3. **Copiar y configurar archivo de entorno**
cp .env.example .env

Edita el archivo .env para establecer tus credenciales de base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=copomex
DB_USERNAME=root
DB_PASSWORD=tu_contraseña

4. **Ejecutar Migraciones**
php artisan migrate

5. **Ejecutar  seeders**
php artisan db:seed

6. **Levantar el servidor local**
php artisan serve
Accede a la app en http://127.0.0.1:8000

## Funcionalidades
Mostrar el listado de los estados

Mostrar el listado de los municipios de cada estado



## Frontend
Incluye una vista con Blade + Bootstrap 5 + DataTables que permite:

Ver los estados en una tabla

Ver los municipios de cada estado

## Compomex
Documentación: https://api.copomex.com

// app/Services/CopomexService.php
// protected $token = "pruebas"; // usa tu token real si lo tienes