<?php namespace Pevawi\Kraken;

use Illuminate\Support\Facades\Facade;

class KrakenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Kraken';
    }
}
