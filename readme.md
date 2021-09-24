# Middleware for simple themes in Laravel

The `skoTner/laravel-theme` package provides an easy way to create multiple view themes in your project. By defining a theme in your route you can choose which view-folder to use.

Here's a demo of how you can use it:

```php
Route::get('home', 'HomeController@home')->middleware('theme:your-theme');
```

You can also set a theme for a Route group:

```php
Route::group(['middleware' => 'theme:admin-theme'], function() {
	// "admin-theme" will be applied to all routes defined here
});
```

## Documentation
You'll find the documentation on [https://github.com/skoTner/laravel-theme](https://github.com/skoTner/laravel-theme).

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improving? Feel free to [create an issue on GitHub](https://github.com/skoTner/laravel-theme/issues), I'll try to address it as soon as possible.

If you've found a security issue please mail [andreas@skotner.net](mailto:andreas@skotner.net) instead of using the issue tracker.


## Installation

You can install the package via composer:

``` bash
composer require skoTner/laravel-theme
```

The package will automatically register itself.

You can publish the config with:
```bash
php artisan vendor:publish --provider="Skotner\Theme\ThemeServiceProvider"
```

You can optionally change the path of your themes folder in the config file:

```php
return [

	/*
	* Folder where you will store your themes
	*/
	'folder' => resource_path('views/themes'),

];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes.

## Security

If you discover any security related issues, please email andreas@skotner.net instead of using the issue tracker.

## Free to use

You're free to use this package, but if it makes it to your production environment we highly appreciate you stating credits to us:

We are: Skotner Gruppen AS - www.skotner.no - Norway

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
