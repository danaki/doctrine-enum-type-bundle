# DoctrineEnumTypeBundle

Configures [Doctrine Enum Type](https://github.com/acelaya/doctrine-enum-type) via Symfony config file.

## Installation

```
composer require danaki/doctrine-enum-type-bundle
```

## Usage

Create `config/doctrine_enum_type.yaml` with similar contents:
```
danaki_doctrine_enum_type:
    types:
        php_enum_gender: Acelaya\Enum\Gender
        Acelaya\Enum\Action: ~
```

## Problems

If you're getting "Unknown column type" error, try to clear cache with `rm -rf var/cache`
