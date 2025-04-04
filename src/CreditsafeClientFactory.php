<?php

namespace PaymentAssist;

use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class CreditsafeClientFactory
{
    public static function factory(string $wsdl) : CreditsafeClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(CreditsafeClassmap::types())
                )
                ->withTransport(
                    Psr18Transport::createForClient(
                        new PluginClient(
                            Psr18ClientDiscovery::find(),
                            [new CreditsafeMiddleware()]
                        )
                    )
                )
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new CreditsafeClient($caller);
    }
}

