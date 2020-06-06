## Google Sheets Integration With Laravel
### Installation
```terminal
foo@bar:~$ cd LaravelGoogleSheetsTest
foo@bar:~LaravelGoogleSheetsTest$ cp .env.example .env
foo@bar:~LaravelGoogleSheetsTest$ php artisan key:generate

foo@bar:~LaravelGoogleSheetsTest$ composer require google/apiclient:"^2.0"
foo@bar:~LaravelGoogleSheetsTest$ php artisan cache:clear
foo@bar:~LaravelGoogleSheetsTest$ php artisan config:cache
```

### Launch HTTP Server
```terminal
foo@bar:~LaravelGoogleSheetsTest$ php artisan serve
```


