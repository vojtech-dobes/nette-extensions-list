## For Nette Framework

Enables registration of other extensions in config file

## License

[New BSD](http://choosealicense.com/licenses/bsd-3-clause/)

## Dependencies

- Nette Framework 2.0.5 (because of nette/nette#740)

## Installation

1. Get the source code from Github or via Composer (`vojtech-dobes/extensions-list`).
2. Register as compiler extension.

```php
$configurator->onCompile[] = function ($configurator, $compiler) {
	$compiler->addExtension('extensions', new VojtechDobes\ExtensionsList);
};
```

## Usage

List extensions in appropriate config section:

```
extensions:
	dibi: DibiNetteExtension
	redis: Kdyby\Extension\Redis\DI\RedisExtension
```

That's it.
