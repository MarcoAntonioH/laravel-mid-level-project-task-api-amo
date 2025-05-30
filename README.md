##  Requisitos

- PHP 8.1+
- Composer
- MySQL o MariaDB (usado con Laragon)
- Laravel 10
- Postman para pruebas

---

## Instalación del proyecto

```bash
git clone https://github.com/tu-usuario/laravel-mid-level-project-task-api-amo.git
cd laravel-mid-level-project-task-api-amo
composer install
cp .env.example .env
php artisan key:generate


//Configurar con los datos de la base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_task_db
DB_USERNAME=root
DB_PASSWORD=

// y Ahora ejecutar migraciones 
php artisan migrate
php artisan serve

//Pruebas con Postman
php artisan serve
// Accede a los endpoints desde http://127.0.0.1:8000
//Usa métodos como POST, GET, PUT, DELETE con Content-Type: application/json


