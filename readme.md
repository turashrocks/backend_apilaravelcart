![postman-seeklogo com](https://user-images.githubusercontent.com/25128254/65383480-f8493d80-dd37-11e9-9a40-4ca0063cd565.jpg)

## Installation

###### git clone full repo 
###### .env file modifcation

```
composer install
```

```
php artisan migarate
```

```
php artisan key:generate
```

```
php artisan passport:install 
```

```
php artisan vendor:publish --tag=passport-migrations
```

## Generating Demo Contents

```
php artisan tinker
```
###### In command line type  

```
factory(App\Task::class, 5)->create()
```
## Rest API GET, POST, PUT with Postman

###### Register User [http://127.0.0.1:8000/api/register]

![register](https://user-images.githubusercontent.com/25128254/65382814-583ae680-dd2e-11e9-9575-e05f75a3f198.png)