<?php

namespace PaymentAssist\Type;

class CTInputamendment
{
    /**
     * Change to balance or credit limit
     *
     * @var null | int
     */
    private ?int $balorlim = null;

    /**
     * Change to term of loan
     *
     * @var null | mixed
     */
    private mixed $term = null;

    /**
     * Additional address details
     *
     * @var null | \PaymentAssist\Type\CTInputaddress
     */
    private ?\PaymentAssist\Type\CTInputaddress $address = null;

    /**
     * Additional name details
     *
     * @var null | \PaymentAssist\Type\CTInputname
     */
    private ?\PaymentAssist\Type\CTInputname $name = null;

    /**
     * Name of node that amendment applies to
     *
     * @var string
     */
    private string $amendmentname;

    /**
     * Type of amendment - update or insert
     * The list of possible values can be obtained from the web method LookupData07a table id = amendmenttype
     *
     * @var string
     */
    private string $amendmenttype;

    /**
     * @return null | int
     */
    public function getBalorlim() : ?int
    {
        return $this->balorlim;
    }

    /**
     * @param null | int $balorlim
     * @return static
     */
    public function withBalorlim(?int $balorlim) : static
    {
        $new = clone $this;
        $new->balorlim = $balorlim;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getTerm() : mixed
    {
        return $this->term;
    }

    /**
     * @param null | mixed $term
     * @return static
     */
    public function withTerm(mixed $term) : static
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTInputaddress
     */
    public function getAddress() : ?\PaymentAssist\Type\CTInputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTInputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTInputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTInputname
     */
    public function getName() : ?\PaymentAssist\Type\CTInputname
    {
        return $this->name;
    }

    /**
     * @param null | \PaymentAssist\Type\CTInputname $name
     * @return static
     */
    public function withName(?\PaymentAssist\Type\CTInputname $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAmendmentname() : string
    {
        return $this->amendmentname;
    }

    /**
     * @param string $amendmentname
     * @return static
     */
    public function withAmendmentname(string $amendmentname) : static
    {
        $new = clone $this;
        $new->amendmentname = $amendmentname;

        return $new;
    }

    /**
     * @return string
     */
    public function getAmendmenttype() : string
    {
        return $this->amendmenttype;
    }

    /**
     * @param string $amendmenttype
     * @return static
     */
    public function withAmendmenttype(string $amendmenttype) : static
    {
        $new = clone $this;
        $new->amendmenttype = $amendmenttype;

        return $new;
    }
}

