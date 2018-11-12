# A Global Phone number field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bissolli/nova-phone-field.svg?style=flat-square)](https://packagist.org/packages/bissolli/nova-phone-field)
[![Total Downloads](https://img.shields.io/packagist/dt/bissolli/nova-phone-field.svg?style=flat-square)](https://packagist.org/packages/bissolli/nova-phone-field)
[![StyleCI](https://github.styleci.io/repos/157219733/shield?branch=master)](https://github.styleci.io/repos/157219733)

Add to your Laravel Nova app a Global Phone Number field.

![screenshot of the phone field](https://raw.githubusercontent.com/bissolli/nova-phone-field/master/screenshots/nova-phone-field.gif)

## Requirements

Laravel Nova, only =)

## Installation

You can install this package into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require bissolli/nova-phone-field
```

## Usage

Go straight to your Nova resource and use `Bissolli\NovaPhoneField\PhoneNumber` field:

```php
namespace App\Nova;

use Bissolli\NovaPhoneField\PhoneNumber;

class Member extends Resource
{
    // ...
    
    public function fields(Request $request)
    {
        return [
            // ...
            
            PhoneNumber::make('Phone Number'),

            // ...
        ];
    }
}
```

Now you can view and add tags on the blog posts screen in your Nova app. All tags will be saved in the `tags` table. 

### Filtering

By default, every country mask available inside `bissolli/nova-phone-field/resources/js/data/phone-masks.json` will be loaded and working. However, you can always select the desired countries calling the `onlyCountries()` method.

```php
PhoneNumber::make('Phone Number')
    ->onlyCountries('BR', 'US', 'IE'),
```

### Custom number format

You can also add custom phone formats with `withCustomFormats()`.

```php
PhoneNumber::make('Phone Number')
    ->withCustomFormats('+123 ## #.#', '+123 ## ####.####'),
```

Or else use only your own phone formats calling for `withCustomFormats()` among with `onlyCustomFormats()`.

```php
PhoneNumber::make('Phone Number')
    ->withCustomFormats('+123 ## #.#', '+123 ## ####.####')
    ->onlyCustomFormats(),
```

## Testing

To be implemented

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email gustavo.bissolli@gmail.com instead of using the issue tracker.

## Credits

- [Gustavo Bissolli](https://github.com/bissolli)

Special thanks to [Robin Herbots](https://github.com/RobinHerbots) who built one of the best [InputMask](https://github.com/RobinHerbots/Inputmask) from the internet. 

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
