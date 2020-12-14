## 🖥️ Installation

- Clone the repository to your local environment

```shell script
$ git clone https://github.com/PanjiNamjaElf/todo-task.git
```

- Copy `.env.example` to `.env` and fill it with your APP and DB info

```shell script
$ php -r "file_exists('.env') || copy('.env.dist', '.env');"
```

- Install depedencies
```shell script
$ composer install && npm install && npm run prod
```

- Setup
```shell script
$ php artisan key:generate
$ php artisan migrate --seed
$ sudo chown -R www-data: storage bootstrap public config
```

## 🧪 Testing
```shell script
$ ./vendor/bin/pest
```
