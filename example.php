<?php

require_once 'vendor/autoload.php';

use PaymentAssist\CreditsafeClientFactory;
use PaymentAssist\Type\CTSearch;
use PaymentAssist\Type\CTSearchapplicant;
use PaymentAssist\Type\CTSearchDefinition;
use PaymentAssist\Type\CTSearchrequest;

$client = CreditsafeClientFactory::factory(__DIR__ . '/config/CallReport7Test.wsdl'); // CallReport7.wsdl for live

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

$definition = (new CTSearchDefinition())
    ->withYourreference('123-123')
    ->withCreditrequest($request);

$searchInput = new CTSearch($definition);
$response    = $client->Search07a($searchInput);
