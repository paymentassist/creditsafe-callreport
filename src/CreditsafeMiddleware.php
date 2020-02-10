<?php

namespace PaymentAssist;

use Phpro\SoapClient\Xml\SoapXml;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Http\Promise\Promise;

class CreditsafeMiddleware extends \Phpro\SoapClient\Middleware\MiddleWare
{
    public function getName(): string
    {
        return 'creditsafe_middleware';
    }

    /**
     * @param callable         $handler
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return PromiseInterface
     */
    public function beforeRequest(callable $handler, RequestInterface $request, $options = []): Promise
    {
        $xml = SoapXml::fromStream($request->getBody());
        $headers = [
            'company' => 'COMPANY',
            'username' => 'USERNAME',
            'password' => 'PASSWORD'
        ];
        $newHeader = $xml->createSoapHeader();

        // add our auth
        $node = $xml->getXmlDocument()->createElementNS('urn:callcredit.co.uk/soap:callreport7', 'callcreditheaders');
        foreach($headers as $k => $v) {
            $node->appendChild($xml->getXmlDocument()->createElement($k, $v));
        }

        $newHeader->appendChild($node);
        $xml->prependSoapHeader($newHeader);
        $request = $request->withBody($xml->toStream());

        return $handler($request, $options);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function afterResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}