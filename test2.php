<?php
require_once 'vendor/autoload.php';

use Http\Adapter\Guzzle6\Client;
use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use PaymentAssist\CreditsafeClient;
use PaymentAssist\CreditsafeClassmap;
use PaymentAssist\CreditsafeMiddleware;

$handler = HttPlugHandle::createForClient(
   Client::createWithConfig(['headers' => ['User-Agent' => 'testing/1.0']])
);
$handler->addMiddleware(new CreditsafeMiddleware());

$wsdl = __DIR__ . '/config/CallReport7.wsdl';
$engine = ExtSoapEngineFactory::fromOptionsWithHandler(
    ExtSoapOptions::defaults($wsdl, [])->withClassMap(CreditsafeClassmap::getCollection()),
    $handler
);

$eventDispatcher = new EventDispatcher();
$client = new CreditsafeClient($engine, $eventDispatcher);

#$client = \PaymentAssist\CreditsafeClientFactory::factory(__DIR__ . '/config/CallReport7.wsdl');

$input = [
    'SearchDefinition' => [
        'payload' => [
            'one' => 1,
            'two' => 2,
        ],
        'yourreference' => '123-123',
        'creditrequest' => [
            '$' => ['schemaversion' => "7.3", 'datasets' => 2],
            'applicant' => [
                'address' => [
                    'abodeno' => "",
                    'buildingno' => "1",
                    'buildingname' => "",
                    'street1' => "TOP GEAR LANE",
                    'street2' => "",
                    'sublocality' => "",
                    'locality' => "",
                    'posttown' => "TEST TOWN",
                    'postcode' => "X9 9LF",
                    #'startdate' => "YYYY-MM-DD",
                    #'enddate' => "YYYY-MM-DD",
                    #'duration' => 'P5Y0M0D', // eg. P5Y0M0D = 5 years, 0 months, 0 days
                ],
                'name' => [
                    'title' => "MISS",
                    'forename' => "JULIA",
                    'othernames' => "",
                    'surname' => "AUDI",
                    'suffix' => ""
                ],
                'dob' => "1994-10-13",
                'hho' => 0, # household override check?
                'tpoptout' => 0, # third-party opt-out
                'applicantdemographics' => [
                    'contact' => [
                        'email' => [
                            'type' => "03",
                            'address' => "Julia.Audi@email.com"
                        ],
                        'telephone' => [
                            'type' => "13",
                            'std' => "0123",
                            'number' => "456789"
                        ]
                    ],
                    'employment' => null
                ]
            ],
            'score' => 1,
            'purpose' => "58", # Limited Subject Access Request (158)
            'transient' => 0,
            'autosearch' => 1, # auto-search for undeclared addresses,
            'autosearchmaximum' => 999
        ]
    ]
];

$contact = (new \PaymentAssist\Type\Contact())
    ->withEmail($input['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['email'])
    ->withTelephone($input['SearchDefinition']['creditrequest']['applicant']['applicantdemographics']['contact']['telephone']);

$demographics = (new \PaymentAssist\Type\CTApplicantdemographics())
    ->withContact($contact);

$applicant = (new \PaymentAssist\Type\CTSearchapplicant())
    ->withAddress($input['SearchDefinition']['creditrequest']['applicant']['address'])
    ->withName($input['SearchDefinition']['creditrequest']['applicant']['name'])
    ->withDob(DateTime::createFromFormat('Y-m-d', $input['SearchDefinition']['creditrequest']['applicant']['dob']))
    ->withHho(0)
    ->withTpoptout(0)
    ->withApplicantdemographics($demographics);

$request = (new \PaymentAssist\Type\CTSearchrequest())
    ->withSchemaversion("7.2")
    ->withDatasets(511) // 2
    ->withApplicant($applicant)
    ->withScore(1)
    ->withPurpose(58)
    ->withTransient(0)
    ->withAutosearch(1)
    ->withAutosearchmaximum(5);

#$payload = (new \PaymentAssist\Type\CTPayload());

$definition = (new \PaymentAssist\Type\CTSearchDefinition())
    ->withPayload(new \PaymentAssist\Type\CTPayload())
    ->withYourreference('123-123')
    ->withCreditrequest($request);


$searchInput = new \PaymentAssist\Type\CTSearch($definition);
$response = $client->Search07a($searchInput);
print_r($response);
print_r($client->_getLastRequest());
