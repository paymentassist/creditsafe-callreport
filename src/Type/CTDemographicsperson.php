<?php

namespace PaymentAssist\Type;

class CTDemographicsperson
{

    /**
     * @var string
     */
    private $customerstatus;

    /**
     * @var string
     */
    private $maritalstatus;

    /**
     * @var int
     */
    private $totaldependents;

    /**
     * @var string
     */
    private $language;

    /**
     * @var \PaymentAssist\Type\CTDemographicsidentity
     */
    private $identity;

    /**
     * @return string
     */
    public function getCustomerstatus()
    {
        return $this->customerstatus;
    }

    /**
     * @param string $customerstatus
     * @return CTDemographicsperson
     */
    public function withCustomerstatus($customerstatus)
    {
        $new = clone $this;
        $new->customerstatus = $customerstatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getMaritalstatus()
    {
        return $this->maritalstatus;
    }

    /**
     * @param string $maritalstatus
     * @return CTDemographicsperson
     */
    public function withMaritalstatus($maritalstatus)
    {
        $new = clone $this;
        $new->maritalstatus = $maritalstatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaldependents()
    {
        return $this->totaldependents;
    }

    /**
     * @param int $totaldependents
     * @return CTDemographicsperson
     */
    public function withTotaldependents($totaldependents)
    {
        $new = clone $this;
        $new->totaldependents = $totaldependents;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return CTDemographicsperson
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsidentity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsidentity $identity
     * @return CTDemographicsperson
     */
    public function withIdentity($identity)
    {
        $new = clone $this;
        $new->identity = $identity;

        return $new;
    }


}

