<?php

require_once 'vendor/autoload.php';

use Http\Adapter\Guzzle7\Client;
use PaymentAssist\CreditsafeClassmap;
use PaymentAssist\CreditsafeClient;
use PaymentAssist\CreditsafeMiddleware;
use PaymentAssist\Type\CTSearch;
use PaymentAssist\Type\CTSearchapplicant;
use PaymentAssist\Type\CTSearchrequest;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;

$handler = HttPlugHandle::createForClient(
    Client::createWithConfig(['headers' => ['User-Agent' => 'Payment Assist Client/1.0']])
);
$handler->addMiddleware(new CreditsafeMiddleware());

$wsdl   = __DIR__ . '/config/CallReport7Test.wsdl'; // CallReport7.wsdl for live
$engine = ExtSoapEngineFactory::fromOptionsWithHandler(
    ExtSoapOptions::defaults($wsdl, [])->withClassMap(CreditsafeClassmap::getCollection()),
    $handler
);

$eventDispatcher = new EventDispatcher();
$client          = new CreditsafeClient($engine, $eventDispatcher);

$address = [
    'buildingno' => '26',
    'street1'    => 'callscreen lane',
    'postcode'   => 'x9 9rb',
    'posttown'   => 'test town',
];

$name = [
    'forename' => 'mark',
    'surname'  => 'kookaburra',
];

$applicant = (new CTSearchapplicant())
    ->withAddress($address)
    ->withName($name)
    ->withDob(DateTime::createFromFormat('Y-m-d', '1962-11-04'))
    ->withHho(0)
    ->withTpoptout(0);

$request = (new CTSearchrequest())
    ->withSchemaversion("7.2")
    ->withDatasets(15)
    ->withApplicant($applicant)
    ->withScore(1)
    ->withPurpose("CA")
    ->withTransient(0)
    ->withAutosearch(1)
    ->withAutosearchmaximum(2);

$definition = (new \PaymentAssist\Type\CTSearchDefinition())
    ->withYourreference('123-123')
    ->withCreditrequest($request);

$searchInput = new CTSearch($definition);
$response    = $client->Search07a($searchInput);
