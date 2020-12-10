## Google Sheets Integration With Laravel
### Installation
```console
foo@bar:~/$ cd LaravelGoogleSheetsTest
foo@bar:~/LaravelGoogleSheetsTest$ npm install
foo@bar:~/LaravelGoogleSheetsTest$ composer install
foo@bar:~/LaravelGoogleSheetsTest$ cp .env.example .env
foo@bar:~/LaravelGoogleSheetsTest$ php artisan key:generate
```

If you want to install to your own project run next command

```console
foo@bar:~/LaravelGoogleSheetsTest$ composer require google/apiclient:"^2.0"
```

if you changed .env run this

```console
foo@bar:~/LaravelGoogleSheetsTest$ php artisan cache:clear
foo@bar:~/LaravelGoogleSheetsTest$ php artisan config:cache
```

### Launch HTTP Server
```console
foo@bar:~/LaravelGoogleSheetsTest$ php artisan serve
```

### Learning Source & Other Repository
* https://github.com/googleapis/google-api-php-client
* https://www.youtube.com/watch?v=iTZyuszEkxI
