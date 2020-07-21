# Título del Proyecto

_Api rest con laravel y Passport - Autenticación con JWT_
## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._



### Pre-requisitos 📋


```
* Composer
* Servidor apache y Maria DB
* Php V 7.3 o superior
```


### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

Instalación de dependencias

```
composer install
```

Configurar el archivo .env con el nombre de la base de datos creada en maria DB (Ejemplo)

```
DB_DATABASE=autenticacion
```


Configurar el archivo .env generar llaves para los paquetes

```
php artisan key:generate
php artisan passport:install
```

Configurar las migraciones y los seeder para los datos por defecto

```
php artisan migrate --seed
php artisan passport:install
```

En caso de que ya existan datos y quiera reemplazar las migraciones y los seeder 

```
php artisan migrate:fresh --seed
```

Ejecutar servidor local en el proyecto 

```
php artisan serve
```

## Despliegue 📦

_Agrega notas adicionales sobre como hacer deploy_

## Construido con 🛠️
