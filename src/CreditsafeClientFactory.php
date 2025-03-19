<?php

namespace PaymentAssist;

use PaymentAssist\CreditsafeClient;
use PaymentAssist\CreditsafeClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class CreditsafeClientFactory
{
    public static function factory(string $wsdl) : \PaymentAssist\CreditsafeClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(CreditsafeClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new CreditsafeClient($caller);
    }
}

