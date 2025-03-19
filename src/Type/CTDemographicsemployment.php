<?php

namespace PaymentAssist\Type;

class CTDemographicsemployment
{
    /**
     * Occupation Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsoccupationtype
     *
     * @var null | string
     */
    private ?string $occupation = null;

    /**
     * Employment Status Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsemploymentstatus
     *
     * @var null | string
     */
    private ?string $employmentstatus = null;

    /**
     * Employment Expiry Data - dependent on the Employment Status Code
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $expirydate = null;

    /**
     * Employment Recency Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsemploymentrecencytype
     *
     * @var null | string
     */
    private ?string $employmentrecency = null;

    /**
     * Employer Category Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsemployercategory
     *
     * @var null | string
     */
    private ?string $employercategory = null;

    /**
     * Total number of months with the current employer
     *
     * @var null | mixed
     */
    private mixed $timeatcurrentemployer = null;

    /**
     * @return null | string
     */
    public function getOccupation() : ?string
    {
        return $this->occupation;
    }

    /**
     * @param null | string $occupation
     * @return static
     */
    public function withOccupation(?string $occupation) : static
    {
        $new = clone $this;
        $new->occupation = $occupation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmploymentstatus() : ?string
    {
        return $this->employmentstatus;
    }

    /**
     * @param null | string $employmentstatus
     * @return static
     */
    public function withEmploymentstatus(?string $employmentstatus) : static
    {
        $new = clone $this;
        $new->employmentstatus = $employmentstatus;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getExpirydate() : ?\DateTimeInterface
    {
        return $this->expirydate;
    }

    /**
     * @param null | \DateTimeInterface $expirydate
     * @return static
     */
    public function withExpirydate(?\DateTimeInterface $expirydate) : static
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmploymentrecency() : ?string
    {
        return $this->employmentrecency;
    }

    /**
     * @param null | string $employmentrecency
     * @return static
     */
    public function withEmploymentrecency(?string $employmentrecency) : static
    {
        $new = clone $this;
        $new->employmentrecency = $employmentrecency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmployercategory() : ?string
    {
        return $this->employercategory;
    }

    /**
     * @param null | string $employercategory
     * @return static
     */
    public function withEmployercategory(?string $employercategory) : static
    {
        $new = clone $this;
        $new->employercategory = $employercategory;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getTimeatcurrentemployer() : mixed
    {
        return $this->timeatcurrentemployer;
    }

    /**
     * @param null | mixed $timeatcurrentemployer
     * @return static
     */
    public function withTimeatcurrentemployer(mixed $timeatcurrentemployer) : static
    {
        $new = clone $this;
        $new->timeatcurrentemployer = $timeatcurrentemployer;

        return $new;
    }
}

