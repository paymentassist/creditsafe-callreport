<?php

namespace PaymentAssist;

use PaymentAssist\CreditsafeClient;
use PaymentAssist\CreditsafeClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class CreditsafeClientFactory
{

    public static function factory(string $wsdl) : \PaymentAssist\CreditsafeClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(CreditsafeClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new CreditsafeClient($engine, $eventDispatcher);
    }


}

