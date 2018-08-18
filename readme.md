## Installation

```
composer require monurakkaya/laravel-alert
php artisan vendor:publish --tag=laravel-alert
```

## Usage
Include the package's master blade page to your layout 

```php
@include('laravel-alert::master')
``` 

#### Helpers

```php

success($message, $title=NULL)
//success('Hi') --> Hi, Success!

error($message, $title=NULL)
//error('Ops!') --> Ops!, There is a Problem!

```
You can override the default title by passing second argument to success or error functions


#### Quick Messages

These messages are time savers for fully crud applications.

```
success_for_create() //Data has been created
success_for_update() //Data has been updated
success_for_delete() //Data has been deleted
```

#### Translations
Refer to `/resources/lang/en/laravel-alert.php`

#### Other Options

Refer to `/config/laravel-alert.php` to change default error and success css classes
