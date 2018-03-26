## Intro

* 中文讨论请前往：https://phphub.org/topics/2301
* 中文教程见这里：https://phphub.org/topics/2407


Forked from [summerblue/administrator](https://github.com/summerblue/administrator) with the following changes:

* Support over Laravel 5.4.*
	+ different between [Illuminate/Database/Eloquent/Relations/BelongsToMany::getForeignKey](https://laravel.com/api/5.3/Illuminate/Database/Eloquent/Relations/BelongsToMany.html#method_getForeignKey) and [Illuminate/Database/Eloquent/Relations/BelongsToMany::getQualifiedForeignKeyName](https://laravel.com/api/5.4/Illuminate/Database/Eloquent/Relations/BelongsToMany.html#method_getQualifiedForeignKeyName)
	+ different between [Illuminate/Database/Eloquent/Relations/BelongsToMany::getOtherKey](https://laravel.com/api/5.3/Illuminate/Database/Eloquent/Relations/BelongsToMany.html#method_getOtherKey) and [Illuminate/Database/Eloquent/Relations/BelongsToMany::getQualifiedRelatedKeyName](https://laravel.com/api/5.4/Illuminate/Database/Eloquent/Relations/BelongsToMany.html#method_getQualifiedRelatedKeyName)
	+ different between [Illuminate/Database/Eloquent/Relations/BelongsTo::getOtherKey](https://laravel.com/api/5.3/Illuminate/Database/Eloquent/Relations/BelongsTo.html#method_getOtherKey) and [Illuminate/Database/Eloquent/Relations/BelongsTo::getOwnerKey](https://laravel.com/api/5.4/Illuminate/Database/Eloquent/Relations/BelongsTo.html#method_getOwnerKey)
	+ different between [Illuminate/Database/Eloquent/Relations/HasOneOrMany::getPlainForeignKey](https://laravel.com/api/5.3/Illuminate/Database/Eloquent/Relations/HasOneOrMany.html#method_getPlainForeignKey) and [Illuminate/Database/Eloquent/Relations/HasOneOrMany::getForeignKeyName](https://laravel.com/api/5.4/Illuminate/Database/Eloquent/Relations/HasOneOrMany.html#method_getForeignKeyName)


![1](https://cloud.githubusercontent.com/assets/324764/16544619/6db648d0-413f-11e6-8842-bf0b993416ef.png)

![2](https://cloud.githubusercontent.com/assets/324764/16544623/72a8c0ac-413f-11e6-9c5b-0259b07a7c37.png)

## Install

### 1. composer require

```
composer require "jimchen/administrator:^1.0"
```

### 2. add provider

Edit `config/app.php` in `providers` array add provider:

```php
'providers' => [
	Frozennode\Administrator\AdministratorServiceProvider::class,
]
```

### 3. publish assets/config

```
php artisan vendor:publish --provider="Frozennode\Administrator\AdministratorServiceProvider"
```

Read the docs: http://administrator.frozennode.com

-- end
