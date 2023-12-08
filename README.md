## Demo login info

admin: admin@gmail.com | password: password

manager: manager@gmail.com | password: password

employee: employee@gmail.com | password: password

## Installation

```
git clone https://github.com/AnikRifat/6amtechtest.git
cd blog
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed

```

browse http://localhost/6amtechtest/
