<?php

require_once 'vendor/autoload.php';

use PaymentAssist\CreditsafeClientFactory;
use PaymentAssist\Type\CTInputaddress;
use PaymentAssist\Type\CTInputname;
use PaymentAssist\Type\CTSearchapplicant;
use PaymentAssist\Type\CTSearchDefinition;
use PaymentAssist\Type\CTSearchrequest;
use PaymentAssist\Type\Search07a;

$client = CreditsafeClientFactory::factory(__DIR__ . '/config/CallReport7Test.wsdl'); // CallReport7.wsdl for live

$address = (new CTInputaddress())
    ->withBuildingno('26')
    ->withStreet1('callscreen lane')
    ->withPostcode('x9 9rb')
    ->withPosttown('test town');

$name = (new CTInputname())
    ->withForename('mark')
    ->withSurname('kookaburra');

$applicant = (new CTSearchapplicant())
    ->withAddress([$address])
    ->withName([$name])
    ->withDob(DateTime::createFromFormat('Y-m-d', '1962-11-04'))
    ->withHho(0)
    ->withTpoptout(0);

$request = (new CTSearchrequest())
    ->withSchemaversion("7.2")
    ->withDatasets(15)
    ->withApplicant([$applicant])
    ->withScore(1)
    ->withPurpose("CA")
    ->withTransient(0)
    ->withAutosearch(1)
    ->withAutosearchmaximum(2);

$definition = (new CTSearchDefinition())
    ->withYourreference('123-123')
    ->withCreditrequest($request);

$searchInput = new Search07a($definition);
$response    = $client->Search07a($searchInput);

$numberOfJudgements = count($response->getSearchResult()->getCreditreport()->getApplicant()[0]->getJudgments()->getJudgment());
echo "$numberOfJudgements judgements found!";
