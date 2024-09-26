

## Tools yang di gunakan

Visual Studio Code

## fitur yang tersedia
Auth
  login
  register
## ERD



### UML



## Teknologi Yang Di Gunakan
  Laravel
  
## Persaratan Untuk Melakukan Instalasi
  PHP
  DATABASE (MariaDB)
  Web Brose (Chrome)

## Instalasi
0.Clone Repository

git clone

  1 . Install atau Update composer

composer install

2. Konfigurasikan file .env dan Databasenya

APP_DEBUG=true
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

3. Melakukan Migrasi dan menyambungkan storage

php artisan key:generate
php artisan storage:link
php artisan migrate

4. Mulai Situs Web

php artisan serve


UKK Toko dibuat oleh Ayesha Surya Fazira
