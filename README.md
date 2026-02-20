# Filament

[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/xcopy/filament/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/xcopy/filament/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/xcopy/filament/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/xcopy/filament/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/xcopy/filament.svg?style=flat-square)](https://packagist.org/packages/xcopy/filament)

Custom Filament components for forms, tables, and infolists with opinionated defaults for common use cases.

## Components

### Forms
`DescriptionTextarea`, `EmailInput`, `MoneyInput`, `NameInput`, `PasswordInput`

### Tables
`DescriptionColumn`, `EnumColumn`, `IdColumn`, `MoneyColumn`, `NameColumn`, `StateColumn`, `TimestampColumn`

### Infolists
`DescriptionEntry`, `EnumEntry`, `MoneyEntry`, `StateEntry`, `TimestampEntry`

## Installation

**Note:** This package is not yet available on Packagist. You must add it to your `composer.json` manually.

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/xcopy/filament"
        }
    ],
    "require": {
        "xcopy/filament": "dev-main"
    }
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
