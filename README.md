

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
  1.Clone Repositori

  git clone https://github.com/ayeshasf/ukk1.git
  Composer Install
  cp .env.example .env

  2.Konfigurasi Database pada file .env
  
  APP_DEBUG=true
  DB_DATABASE=
  DB_USERNAME=
  DB_PASSWORD=

  3.Melakukan Migrasi dan menyambungkan storage

  php artisan key:generate
  php artisan storage:link
  php artisan migrate
  
  4.Memulai Situs Web

  php artisan serve

UKK Toko dibuat oleh Ayesha Surya Fazira
