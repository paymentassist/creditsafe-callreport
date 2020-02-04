<?php

namespace PaymentAssist\Type;

class CTOutputcifassubject
{

    /**
     * @var \PaymentAssist\Type\Person
     */
    private $person;

    /**
     * @var \PaymentAssist\Type\Company
     */
    private $company;

    /**
     * @var string
     */
    private $hometelephone;

    /**
     * @var string
     */
    private $mobiletelephone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $subjectrole;

    /**
     * @var string
     */
    private $subjectrolequalifier;

    /**
     * @var \PaymentAssist\Type\CTOutputcifasaddress
     */
    private $addressdata;

    /**
     * @return \PaymentAssist\Type\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param \PaymentAssist\Type\Person $person
     * @return CTOutputcifassubject
     */
    public function withPerson($person)
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param \PaymentAssist\Type\Company $company
     * @return CTOutputcifassubject
     */
    public function withCompany($company)
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return string
     */
    public function getHometelephone()
    {
        return $this->hometelephone;
    }

    /**
     * @param string $hometelephone
     * @return CTOutputcifassubject
     */
    public function withHometelephone($hometelephone)
    {
        $new = clone $this;
        $new->hometelephone = $hometelephone;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobiletelephone()
    {
        return $this->mobiletelephone;
    }

    /**
     * @param string $mobiletelephone
     * @return CTOutputcifassubject
     */
    public function withMobiletelephone($mobiletelephone)
    {
        $new = clone $this;
        $new->mobiletelephone = $mobiletelephone;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CTOutputcifassubject
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubjectrole()
    {
        return $this->subjectrole;
    }

    /**
     * @param string $subjectrole
     * @return CTOutputcifassubject
     */
    public function withSubjectrole($subjectrole)
    {
        $new = clone $this;
        $new->subjectrole = $subjectrole;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubjectrolequalifier()
    {
        return $this->subjectrolequalifier;
    }

    /**
     * @param string $subjectrolequalifier
     * @return CTOutputcifassubject
     */
    public function withSubjectrolequalifier($subjectrolequalifier)
    {
        $new = clone $this;
        $new->subjectrolequalifier = $subjectrolequalifier;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifasaddress
     */
    public function getAddressdata()
    {
        return $this->addressdata;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifasaddress $addressdata
     * @return CTOutputcifassubject
     */
    public function withAddressdata($addressdata)
    {
        $new = clone $this;
        $new->addressdata = $addressdata;

        return $new;
    }


}

