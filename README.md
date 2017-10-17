# Laravel Admin User

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Emanuel Limeira``` ```emanuellimeira``` ```emanuellimeira.com.br``` ```contato@emanuellimeira.com.br``` ```emanuellimeira``` ```laravel-admin-users ``` ```A simple user administration and role-base for laravel.``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

1) Via Composer

``` bash
$ composer require emanuellimeria/laravel-admin-user
```

2) Add the service provider to your config/app.php file:
```php
Elc\User\UserServiceProvider::class,
```
3) Publish the config file & run the migrations
```bash
$ php artisan vendor:publish --provider="Elc\User\UserServiceProvider" #publish config files and migrations
$ php artisan migrate #create the role and permission tables
```


## Usage

``` php
$skeleton = new League\Skeleton();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email contato@emanuellimeira.com.br instead of using the issue tracker.

## Credits

- [Emanuel Limeira][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/emanuellimeira/laravel-admin-users .svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/emanuellimeira/laravel-admin-users /master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/emanuellimeira/laravel-admin-users .svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/emanuellimeira/laravel-admin-users .svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/emanuellimeira/laravel-admin-users .svg?style=flat-square

[link-packagist]: https://packagist.org/packages/emanuellimeira/laravel-admin-users 
[link-travis]: https://travis-ci.org/emanuellimeira/laravel-admin-users 
[link-scrutinizer]: https://scrutinizer-ci.com/g/emanuellimeira/laravel-admin-users /code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/emanuellimeira/laravel-admin-users 
[link-downloads]: https://packagist.org/packages/emanuellimeira/laravel-admin-users 
[link-author]: https://github.com/emanuellimeira
[link-contributors]: ../../contributors
