<?php

namespace PaymentAssist\Type;

class CTSearchapplicant
{

    /**
     * @var \PaymentAssist\Type\CTInputaddress
     */
    private $address;

    /**
     * @var \PaymentAssist\Type\CTInputname
     */
    private $name;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @var int
     */
    private $hho;

    /**
     * @var int
     */
    private $tpoptout;

    /**
     * @var \PaymentAssist\Type\CTApplicantdemographics
     */
    private $applicantdemographics;

    /**
     * @return \PaymentAssist\Type\CTInputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddress $address
     * @return CTSearchapplicant
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTInputname
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \PaymentAssist\Type\CTInputname $name
     * @return CTSearchapplicant
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTimeInterface $dob
     * @return CTSearchapplicant
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return int
     */
    public function getHho()
    {
        return $this->hho;
    }

    /**
     * @param int $hho
     * @return CTSearchapplicant
     */
    public function withHho($hho)
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }

    /**
     * @return int
     */
    public function getTpoptout()
    {
        return $this->tpoptout;
    }

    /**
     * @param int $tpoptout
     * @return CTSearchapplicant
     */
    public function withTpoptout($tpoptout)
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTApplicantdemographics
     */
    public function getApplicantdemographics()
    {
        return $this->applicantdemographics;
    }

    /**
     * @param \PaymentAssist\Type\CTApplicantdemographics $applicantdemographics
     * @return CTSearchapplicant
     */
    public function withApplicantdemographics($applicantdemographics)
    {
        $new = clone $this;
        $new->applicantdemographics = $applicantdemographics;

        return $new;
    }


}

