<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## UTS Development Framework

Nama Anggota kelompok :
<li>Candra Aldi Kuncoro      22.01.4786</li>
<li>Amri Fahrizal Shiddiq    22.01.4736</li>
<li>Pandu Setia Darmawan     22.01.4743</li>
<li>Fadhilah Hafidz Pradana  22.01.4769</li>
<br>
Beberapa fitur yang tersedia :
<li>Login & Register</li>
<li>CRUD Data Produk</li>

## Instalasi
#### Via Git
```bash
git clone https://github.com/fadhilahhfdz/CRUD-UTS-DevFramework.git
```

### Download ZIP
[link](https://github.com/fadhilahhfdz/CRUD-UTS-DevFramework/archive/refs/heads/main.zip)

### Setup Aplikasi
Jalankan Perintah
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
DB_DATABASE=database/database.sqlite
# DB_USERNAME=root
# DB_PASSWORD=
```
Migrate database
```bash
php artisan migrate
```
Ubah path database di file .env
```bash
DB_DATABASE=../database/database.sqlite
```
Generate key
```bash
php artisan key:generate
```
Menjalankan Aplikasi
```bash
php artisan serve
```

## Link Youtube Presentasi
[Youtube](https://youtu.be/zr1cbLSV_hE?si=2DiYho1hWKuVuO2Z)
