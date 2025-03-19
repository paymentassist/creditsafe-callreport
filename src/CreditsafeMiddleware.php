<?php

namespace PaymentAssist;

use DOMDocument;
use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Http\Promise\Promise;
use Soap\Psr18Transport\Xml\XmlMessageManipulator;
use VeeWee\Xml\Dom\Document;

class CreditsafeMiddleware implements Plugin
{
    /**
     * Handles the request and returns the response coming from the next callable.
     *
     * @param RequestInterface $request Request to use.
     * @param callable         $next    Callback to call to have the request, it must have the request as its first argument.
     * @param callable         $first   First element in the plugin chain, used to restart a request from the beginning.
     *
     * @return Promise
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $request = (new XmlMessageManipulator)(
            $request,
            fn (Document $document) => $document->manipulate(
                function (DOMDocument $dom) {
                    $header = $dom->createElement('soap:Header');

                    $authNode = $dom->createElementNS('urn:callcredit.co.uk/soap:callreport7', 'callcreditheaders');
                    $authNode->appendChild($dom->createElement('company', getenv('CREDITSAFE_COMPANY')));
                    $authNode->appendChild($dom->createElement('username', getenv('CREDITSAFE_USERNAME')));
                    $authNode->appendChild($dom->createElement('password', getenv('CREDITSAFE_PASSWORD')));

                    $header->appendChild($authNode);
                    $dom->insertBefore($header, $dom->documentElement->firstChild);
                }
            )
        );

        return $next($request);
    }
}
