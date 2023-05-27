<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## App creado en Laravel 10

Es una app hecha en laravel 10, que incluye un crud con alertas dinamicas, tambien se puede exportar un excel con la tabla vista, y ver graficos con los datos de la misma tabla.

## Requisitos: Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

•	PHP (versión 7.0 o superior)
•	Composer
•	Laravel Framework (versión 5.8 o superior)
•	MySQL

## Instalación: Sigue estos pasos para instalar y configurar la aplicación:
    
    1.	Clona este repositorio en tu máquina local:
    Terminal: git clone https://github.com/BryanIno/App-practica.git
    Terminal: cd App-practica 
    
    2.	Instala las dependencias de Composer:
    Terminal: composer install 
    
    3.	Crea una Base de datos Mysql, en mi caso utilize “phpmyadmin”, llamada app-practica. De esa manera, la deje ingresada en el .env-example. 
    
    4.	Crea un archivo .env basado en el archivo .env.example y configura los valores de   conexión a la base de datos:
    Terminal: cp .env.example .env 
    (para crear una copia del archivo de ejemplo .env.example y renombrarlo como .env)
    Asegúrate de proporcionar los valores correctos para :
    DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME y DB_PASSWORD.
    
    5.	Genera una nueva clave de aplicación:
    Terminal: php artisan key:generate 
    (para generar una clave de cifrado única y segura en el archivo de configuración .env del   proyecto.)
    
    6.	Ejecuta las migraciones para crear las tablas de la base de datos:
    Terminal: php artisan migrate 
    
    7.	Ejecuta el seeder para crear usuarios en la base de datos:
    Terminal: php artisan db:seed
    
    8.	Inicia el servidor de desarrollo de Laravel:
    Terminal: php artisan serve
    La aplicación estará disponible en http://localhost:8000.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
