# laravel-kraken
A composer package for the Kraken PHP API which supports the Laravel 5
framework.

## Composer Installation
The best way to install laravel-kraken is with [Composer](<https://getcomposer.org/>).

To install the most recent version, run the following command.

`$ php composer.phar require pevawi/laravel-kraken`

Alternatively, you may edit your composer.son directly by adding the following
to the require section.
```
"require": {
    "pevawi/laravel-kraken": "1.*",
}
```

## Integration in Laravel
### Providers

Register the service provider in `config/app.php` by inserting it into the
providers array:
```
'providers' => [
    ...
    Pevawi\Kraken\KrakenServiceProvider::class,
    ...
]
```
### Publish Configuration File
Running the following command will publish `config/kraken.php` to your config
folder. In this file you will need to insert your api key and api secret.

`$ php artisan vendor:publish
—provider="Pevawi\Kraken\KrakenServiceProvider"`

### Facade
Register the facade in `config/app.php` by inserting it into the aliases array:
```
'aliases' => [
    ...
    'KrakenIO' => Pevawi\Kraken\KrakenFacade::class,
    ...
]
```
## Usage
Be sure to `use KrakenIO;` in your code

Then you can simply:
```
$response = KrakenIO::url([
    'url' => 'http://url-to-image.com/file.jpg',
    'wait' => true,
]);
```

Full documentation on the Kraken PHP Api is available on their [Kraken PHP API
Github Repo](<https://github.com/kraken-io/kraken-php>).
