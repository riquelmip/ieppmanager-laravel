
<p align="center">
  <a href="https://github.com/riquelmip/ieppmanager">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">IEPPManager</h3>

  <p align="center">
    Administrador de recursos de la Iglesia Príncipe de paz.
    <br/>
    <br/>
    <a href="https://github.com/riquelmip/ieppmanager">Ver Demo</a>
  </p>
</p>

![Downloads](https://img.shields.io/github/downloads/riquelmip/ieppmanager/total) ![Contributors](https://img.shields.io/github/contributors/riquelmip/ieppmanager?color=dark-green) ![Forks](https://img.shields.io/github/forks/riquelmip/ieppmanager?style=social) ![Stargazers](https://img.shields.io/github/stars/riquelmip/ieppmanager?style=social) ![Issues](https://img.shields.io/github/issues/riquelmip/ieppmanager) ![License](https://img.shields.io/github/license/riquelmip/ieppmanager) 

## Sobre el proyecto

![Screen Shot](images/screenshot.png)

Este proyecto es un administrador de recursos para la Iglesia Evangélica del Príncipe de Paz, el cual contempla lo siguiente:

1. Administración de las letras del himnario oficial, cancionero de alabanzas, cadenas de coros de avivamiento y adoración.
2. Administración de predicaciones según los usuarios registrados en el sistema.
3. Administración de actividades a realizar, las cuales llevan todos los cantos que se tocarán en una actividad.
4. Administración de privilegios para cada culto, de acuerdo a las directivas que existen.
5. Administración de acordes

## Construcción

Este sistema está desarrollado en con las siguientes tecnologías:

* [Laravel](https://laravel.com/)
* [MySQL](https://www.mysql.com/)
* [Bootstrap](https://getbootstrap.com/)

## Empezando...

A continuación se muestran las instrucciones para instalar el sistema localmente.

### Prerequisitos

Los prerequisitos son tener instalado en tu sistema:

- Un servidor local como Laragon, XAMPP o WampServer (PHP y MySQL)

### Instalación

Clonar el repositorio

```sh
git clone https://github.com/riquelmip/ieppmanager.git
```
Una vez hayamos clonado el repositorio de nuestro proyecto Laravel en local, debemos hacer los siguientes ajustes para que éste pueda correr en nuestro equipo.

Instalar dependencias

Instalaremos con Composer, el manejador de dependencias para PHP, las dependencias definidos en el archivo composer.json. Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos:
```sh
composer install
```
También debemos instalar las dependencias de NPM definidas en el archivo package.json con:
```sh
npm install
```
Crear una base de datos

Tendrás que configurar algún dato más en el .env relativo a esto, por ejemplo el puerto y el tipo de conexión, ademas del nombre de la base.

Crear el archivo .env
Este archivo es necesario para, entre otras cosas, configurar la conexión de la bbdd, el entorno del proyecto, motores para envio y recepción de correos etc …

Como por cuestiones de seguridad tampoco se subió, necesitamos crearlo.

Podemos duplicar el archivo .env.example, renombrarlo a .env e incluir los datos de conexión de la base de datos que indicamos en el paso anterior.
```PHP
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_project
DB_USERNAME=root
DB_PASSWORD=secret
```
Generar una clave
La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env. Notarás que también falta.

Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:
```sh
php artisan key:generate
```
Ejecutar migraciones
Por último, ejecutamos las migraciones para que se generen las tablas con:
```sh
php artisan migrate 
```

## Uso

Para correr el sistema debes poner en la terminal de tu proyecto:
```sh
php artisan serve
```

## Autor

* **Riquelmi Palacios** - *Desarrollador Web* - [Riquelmi Palacios](https://github.com/riquelmip/) - *Desarrollador del sistema*
