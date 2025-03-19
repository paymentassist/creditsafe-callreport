<?php

namespace PaymentAssist\Type;

class Accholderdetails
{
    /**
     * Account holder's name details
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Account holder's address
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * Account holder's date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * Account holder status code
     * The list of possible values can be obtained from the web method LookupData07a table id = accountholderstatus
     *
     * @var string
     */
    private string $statuscode;

    /**
     * Date that account holder first appeared on the account
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * Date that account holder left account
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress() : ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDob() : ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob) : static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatuscode() : string
    {
        return $this->statuscode;
    }

    /**
     * @param string $statuscode
     * @return static
     */
    public function withStatuscode(string $statuscode) : static
    {
        $new = clone $this;
        $new->statuscode = $statuscode;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartdate() : ?\DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param null | \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(?\DateTimeInterface $startdate) : static
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEnddate() : ?\DateTimeInterface
    {
        return $this->enddate;
    }

    /**
     * @param null | \DateTimeInterface $enddate
     * @return static
     */
    public function withEnddate(?\DateTimeInterface $enddate) : static
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }
}

