<?php

namespace PaymentAssist\Type;

class CTAddress
{
    /**
     * Abode name or number
     *
     * @var null | string
     */
    private ?string $abodeno = null;

    /**
     * Building number
     *
     * @var null | string
     */
    private ?string $buildingno = null;

    /**
     * Building name
     *
     * @var null | string
     */
    private ?string $buildingname = null;

    /**
     * Street 1
     *
     * @var null | string
     */
    private ?string $street1 = null;

    /**
     * Street 2
     *
     * @var null | string
     */
    private ?string $street2 = null;

    /**
     * Sublocality
     *
     * @var null | string
     */
    private ?string $sublocality = null;

    /**
     * District or locality
     *
     * @var null | string
     */
    private ?string $locality = null;

    /**
     * Town
     *
     * @var null | string
     */
    private ?string $posttown = null;

    /**
     * Postcode
     *
     * @var null | string
     */
    private ?string $postcode = null;

    /**
     * @return null | string
     */
    public function getAbodeno() : ?string
    {
        return $this->abodeno;
    }

    /**
     * @param null | string $abodeno
     * @return static
     */
    public function withAbodeno(?string $abodeno) : static
    {
        $new = clone $this;
        $new->abodeno = $abodeno;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBuildingno() : ?string
    {
        return $this->buildingno;
    }

    /**
     * @param null | string $buildingno
     * @return static
     */
    public function withBuildingno(?string $buildingno) : static
    {
        $new = clone $this;
        $new->buildingno = $buildingno;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBuildingname() : ?string
    {
        return $this->buildingname;
    }

    /**
     * @param null | string $buildingname
     * @return static
     */
    public function withBuildingname(?string $buildingname) : static
    {
        $new = clone $this;
        $new->buildingname = $buildingname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStreet1() : ?string
    {
        return $this->street1;
    }

    /**
     * @param null | string $street1
     * @return static
     */
    public function withStreet1(?string $street1) : static
    {
        $new = clone $this;
        $new->street1 = $street1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStreet2() : ?string
    {
        return $this->street2;
    }

    /**
     * @param null | string $street2
     * @return static
     */
    public function withStreet2(?string $street2) : static
    {
        $new = clone $this;
        $new->street2 = $street2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSublocality() : ?string
    {
        return $this->sublocality;
    }

    /**
     * @param null | string $sublocality
     * @return static
     */
    public function withSublocality(?string $sublocality) : static
    {
        $new = clone $this;
        $new->sublocality = $sublocality;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLocality() : ?string
    {
        return $this->locality;
    }

    /**
     * @param null | string $locality
     * @return static
     */
    public function withLocality(?string $locality) : static
    {
        $new = clone $this;
        $new->locality = $locality;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPosttown() : ?string
    {
        return $this->posttown;
    }

    /**
     * @param null | string $posttown
     * @return static
     */
    public function withPosttown(?string $posttown) : static
    {
        $new = clone $this;
        $new->posttown = $posttown;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }

    /**
     * @param null | string $postcode
     * @return static
     */
    public function withPostcode(?string $postcode) : static
    {
        $new = clone $this;
        $new->postcode = $postcode;

        return $new;
    }
}

