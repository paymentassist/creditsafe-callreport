<?php

namespace PaymentAssist\Type;

class CTInputamendment
{

    /**
     * @var int
     */
    private $balorlim;

    /**
     * @var string
     */
    private $term;

    /**
     * @var \PaymentAssist\Type\CTInputaddress
     */
    private $address;

    /**
     * @var \PaymentAssist\Type\CTInputname
     */
    private $name;

    /**
     * @var string
     */
    private $amendmentname;

    /**
     * @var string
     */
    private $amendmenttype;

    /**
     * @return int
     */
    public function getBalorlim()
    {
        return $this->balorlim;
    }

    /**
     * @param int $balorlim
     * @return CTInputamendment
     */
    public function withBalorlim($balorlim)
    {
        $new = clone $this;
        $new->balorlim = $balorlim;

        return $new;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     * @return CTInputamendment
     */
    public function withTerm($term)
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTInputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddress $address
     * @return CTInputamendment
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
     * @return CTInputamendment
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getAmendmentname()
    {
        return $this->amendmentname;
    }

    /**
     * @param string $amendmentname
     * @return CTInputamendment
     */
    public function withAmendmentname($amendmentname)
    {
        $new = clone $this;
        $new->amendmentname = $amendmentname;

        return $new;
    }

    /**
     * @return string
     */
    public function getAmendmenttype()
    {
        return $this->amendmenttype;
    }

    /**
     * @param string $amendmenttype
     * @return CTInputamendment
     */
    public function withAmendmenttype($amendmenttype)
    {
        $new = clone $this;
        $new->amendmenttype = $amendmenttype;

        return $new;
    }


}

