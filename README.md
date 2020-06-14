# Proyek_Sistem Informasi
This is a simple app built with Laravel 5.7 for Rumah Makan Sinar Minang Balige.

## Instruction
- Clone project
- Install all the dependencies.
```
composer install
```
- Create a new database named "sinarminang"
- Run sql query
- Modify the config/database.php to match with your local configuration.
- Start the app
```
php artisan serve
```

## url that can accessed:
1. Un-Registered Customer
   - /home
   - /menu
   - /gallery
   - /register

2. Registered Customer
   - /login
   - /logout
   - /cart
   - /rating
   - /booking

3. Admin
   - /promo
   - /register-pegawai

4. Kasir
   - /reservation
   - /billing

5. Inventory/Chef
   - /stok
   - /resep

## Akun yang dapat dipakai
1. Admin
```
username: admin@gmail.com
password: admin123
```
2. Customer
```
username: tire@gmail.com
password: lalala123
```
3. Kasir
```
username: frame@gmail.com
password: frame123
```
4. Inventory/Chef
```
username: lala@gmail.com
password: lalala123
```