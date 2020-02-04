<?php

namespace PaymentAssist\Type;

class CTAddress
{

    /**
     * @var string
     */
    private $abodeno;

    /**
     * @var string
     */
    private $buildingno;

    /**
     * @var string
     */
    private $buildingname;

    /**
     * @var string
     */
    private $street1;

    /**
     * @var string
     */
    private $street2;

    /**
     * @var string
     */
    private $sublocality;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var string
     */
    private $posttown;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @return string
     */
    public function getAbodeno()
    {
        return $this->abodeno;
    }

    /**
     * @param string $abodeno
     * @return CTAddress
     */
    public function withAbodeno($abodeno)
    {
        $new = clone $this;
        $new->abodeno = $abodeno;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingno()
    {
        return $this->buildingno;
    }

    /**
     * @param string $buildingno
     * @return CTAddress
     */
    public function withBuildingno($buildingno)
    {
        $new = clone $this;
        $new->buildingno = $buildingno;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingname()
    {
        return $this->buildingname;
    }

    /**
     * @param string $buildingname
     * @return CTAddress
     */
    public function withBuildingname($buildingname)
    {
        $new = clone $this;
        $new->buildingname = $buildingname;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return CTAddress
     */
    public function withStreet1($street1)
    {
        $new = clone $this;
        $new->street1 = $street1;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return CTAddress
     */
    public function withStreet2($street2)
    {
        $new = clone $this;
        $new->street2 = $street2;

        return $new;
    }

    /**
     * @return string
     */
    public function getSublocality()
    {
        return $this->sublocality;
    }

    /**
     * @param string $sublocality
     * @return CTAddress
     */
    public function withSublocality($sublocality)
    {
        $new = clone $this;
        $new->sublocality = $sublocality;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     * @return CTAddress
     */
    public function withLocality($locality)
    {
        $new = clone $this;
        $new->locality = $locality;

        return $new;
    }

    /**
     * @return string
     */
    public function getPosttown()
    {
        return $this->posttown;
    }

    /**
     * @param string $posttown
     * @return CTAddress
     */
    public function withPosttown($posttown)
    {
        $new = clone $this;
        $new->posttown = $posttown;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return CTAddress
     */
    public function withPostcode($postcode)
    {
        $new = clone $this;
        $new->postcode = $postcode;

        return $new;
    }


}

