# Test Membuat Webservice Consume and Provide data Provinsi dan Kota dari API Raja Ongkir | Sprint 1
## Cara Install
1. Clone atau download sourcode di link berikut : https://github.com/luqni/test-dot/tree/sprint_1
2. Ubah file .env.example menjadi .env
3. Sesuaikan Konfigurasi Database nya di .env
4. Lakukan Migrasi Database dengan perintah : php artisan migrate
5. Jalankan perintah CLI artisan untuk fetch dan insert data Provinsi dari API Raja Ongkir ke Database Aplikasi : php artisan save:data_province
6. Jalankan perintah CLI artisan untuk fetch dan insert data Provinsi dari API Raja Ongkir ke Database Aplikasi : php artisan save:data_city
7. Jalankan Webservice dengan menggunakan perintah : php -S localhost:8000 -t public ( Posisi berada di direktori aplikasi/projek )
8. Untuk search data provinsi silahkan buka Postman : http://localhost:8000/search/provinces?id=1
![image.png]( https://github.com/luqni/test-dot/blob/sprint_1/postman_provinsi_sprint1.png )
9. Untuk search data kota silahkan buka Postman : http://localhost:8000/search/cities?id=1
![image.png]( https://github.com/luqni/test-dot/blob/sprint_1/search_kota_sprint1.png )



WebService Menggunakan
## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
