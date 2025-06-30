<?php

namespace PaymentAssist\Type;

class CTOutputcifassubject
{
    /**
     * Person details for a CIFAS Case against a person
     *
     * @var null | \PaymentAssist\Type\Person
     */
    private ?\PaymentAssist\Type\Person $person = null;

    /**
     * Company details for a CIFAS CASE against a company
     *
     * @var null | \PaymentAssist\Type\Company
     */
    private ?\PaymentAssist\Type\Company $company = null;

    /**
     * The home telephone number of a Subject.
     *
     * @var null | string
     */
    private ?string $hometelephone = null;

    /**
     * The mobile telephone number of a Subject
     *
     * @var null | string
     */
    private ?string $mobiletelephone = null;

    /**
     * The email address of a Subject
     *
     * @var null | string
     */
    private ?string $email = null;

    /**
     * Each Subject involved with a CIFAS Case has an indication of the type of its involvement with the Case
     * The list of possible values can be obtained from the web method LookupData07a table id = cifassubjectrole
     *
     * @var string
     */
    private string $subjectrole;

    /**
     * Each Subject's role within the Case is further qualified
     * The list of possible values can be obtained from the web method LookupData07a table id = cifassubjectrolequalifier
     *
     * @var string
     */
    private string $subjectrolequalifier;

    /**
     * An indiviudal address held against a subject
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputcifasaddress>
     */
    private array $addressdata;

    /**
     * @return null | \PaymentAssist\Type\Person
     */
    public function getPerson() : ?\PaymentAssist\Type\Person
    {
        return $this->person;
    }

    /**
     * @param null | \PaymentAssist\Type\Person $person
     * @return static
     */
    public function withPerson(?\PaymentAssist\Type\Person $person) : static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Company
     */
    public function getCompany() : ?\PaymentAssist\Type\Company
    {
        return $this->company;
    }

    /**
     * @param null | \PaymentAssist\Type\Company $company
     * @return static
     */
    public function withCompany(?\PaymentAssist\Type\Company $company) : static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHometelephone() : ?string
    {
        return $this->hometelephone;
    }

    /**
     * @param null | string $hometelephone
     * @return static
     */
    public function withHometelephone(?string $hometelephone) : static
    {
        $new = clone $this;
        $new->hometelephone = $hometelephone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMobiletelephone() : ?string
    {
        return $this->mobiletelephone;
    }

    /**
     * @param null | string $mobiletelephone
     * @return static
     */
    public function withMobiletelephone(?string $mobiletelephone) : static
    {
        $new = clone $this;
        $new->mobiletelephone = $mobiletelephone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubjectrole() : string
    {
        return $this->subjectrole;
    }

    /**
     * @param string $subjectrole
     * @return static
     */
    public function withSubjectrole(string $subjectrole) : static
    {
        $new = clone $this;
        $new->subjectrole = $subjectrole;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubjectrolequalifier() : string
    {
        return $this->subjectrolequalifier;
    }

    /**
     * @param string $subjectrolequalifier
     * @return static
     */
    public function withSubjectrolequalifier(string $subjectrolequalifier) : static
    {
        $new = clone $this;
        $new->subjectrolequalifier = $subjectrolequalifier;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputcifasaddress>
     */
    public function getAddressdata() : array
    {
        return $this->addressdata;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputcifasaddress> $addressdata
     * @return static
     */
    public function withAddressdata(array $addressdata) : static
    {
        $new = clone $this;
        $new->addressdata = $addressdata;

        return $new;
    }
}

