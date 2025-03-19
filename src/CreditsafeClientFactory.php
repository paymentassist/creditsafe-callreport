<?php

namespace PaymentAssist;

use Http\Adapter\Guzzle7\Client;
use Http\Client\Common\PluginClient;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;

class CreditsafeClientFactory
{
    public static function factory(string $wsdl) : CreditsafeClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl)->withClassMap(CreditsafeClassmap::getCollection()),
            Psr18Transport::createForClient(
                new PluginClient(
                    Client::createWithConfig(['headers' => ['User-Agent' => 'Payment Assist Client/1.0']]),
                    [new CreditsafeMiddleware()]
                )
            )
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new CreditsafeClient($caller);
    }
}

