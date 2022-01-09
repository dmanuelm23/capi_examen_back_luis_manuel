# Laravel Usuarios

Este proyecto fue creado con PHP versión 7.4.15, con Laravel Framework versión 8.75 y motor de base de datos MySQL 5.7.24

## Como usar
- Clonar el repositorio con  __git clone__ `https://github.com/dmanuelm23/capi_examen_back_luis_manuel.git`
- Copiar el archivo __.env.example__ a __.env__ y modifica las credenciales de tu base de datos mysql
- Correr en consola __composer install__
- Correr __php artisan key:generate__
- Correr __php artisan migrate:fresh --seed__
- Correr __php artisan server__
- Copia la ruta principal generada por __php artisan serve__ en tu navegador o en postman junto a la siguiente ruta `/api/users`
- Ejemplos: `http://capi_examen_back_luis_manuel.test/api/users`
- `http://127.0.0.1:8000/api/users`
