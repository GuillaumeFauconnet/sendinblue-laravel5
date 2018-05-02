<?php namespace guillaumefauconnet\sendinblue-laravel5\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SendinBlueWrapper
 */
class SendinblueWrapper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sendinblue_wrapper';
    }
}
