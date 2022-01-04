<?php

namespace Penmandotro\MailerLite;

use Illuminate\Support\Facades\Facade;

class MailerLiteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailerlite';
    }
}
