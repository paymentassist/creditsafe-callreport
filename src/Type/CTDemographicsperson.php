<?php

namespace PaymentAssist\Type;

class CTDemographicsperson
{
    /**
     * Customer Applicant Status Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicscustomerstatus
     *
     * @var null | string
     */
    private ?string $customerstatus = null;

    /**
     * Applicant's Marital Status Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsmaritalstatus
     *
     * @var null | string
     */
    private ?string $maritalstatus = null;

    /**
     * Total number of dependent children
     *
     * @var null | int
     */
    private ?int $totaldependents = null;

    /**
     * Language Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicslanguage
     *
     * @var null | string
     */
    private ?string $language = null;

    /**
     * Set of types of identity provided by the Applicant
     *
     * @var array<int<0,3>, \PaymentAssist\Type\CTDemographicsidentity>
     */
    private array $identity;

    /**
     * @return null | string
     */
    public function getCustomerstatus() : ?string
    {
        return $this->customerstatus;
    }

    /**
     * @param null | string $customerstatus
     * @return static
     */
    public function withCustomerstatus(?string $customerstatus) : static
    {
        $new = clone $this;
        $new->customerstatus = $customerstatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMaritalstatus() : ?string
    {
        return $this->maritalstatus;
    }

    /**
     * @param null | string $maritalstatus
     * @return static
     */
    public function withMaritalstatus(?string $maritalstatus) : static
    {
        $new = clone $this;
        $new->maritalstatus = $maritalstatus;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTotaldependents() : ?int
    {
        return $this->totaldependents;
    }

    /**
     * @param null | int $totaldependents
     * @return static
     */
    public function withTotaldependents(?int $totaldependents) : static
    {
        $new = clone $this;
        $new->totaldependents = $totaldependents;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }

    /**
     * @param null | string $language
     * @return static
     */
    public function withLanguage(?string $language) : static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    /**
     * @return array<int<0,3>, \PaymentAssist\Type\CTDemographicsidentity>
     */
    public function getIdentity() : array
    {
        return $this->identity;
    }

    /**
     * @param array<int<0,3>, \PaymentAssist\Type\CTDemographicsidentity> $identity
     * @return static
     */
    public function withIdentity(array $identity) : static
    {
        $new = clone $this;
        $new->identity = $identity;

        return $new;
    }
}

