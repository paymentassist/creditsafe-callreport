<?php

namespace PaymentAssist\Type;

class CTDemographicsemployment
{

    /**
     * @var string
     */
    private $occupation;

    /**
     * @var string
     */
    private $employmentstatus;

    /**
     * @var \DateTimeInterface
     */
    private $expirydate;

    /**
     * @var string
     */
    private $employmentrecency;

    /**
     * @var string
     */
    private $employercategory;

    /**
     * @var string
     */
    private $timeatcurrentemployer;

    /**
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     * @return CTDemographicsemployment
     */
    public function withOccupation($occupation)
    {
        $new = clone $this;
        $new->occupation = $occupation;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmploymentstatus()
    {
        return $this->employmentstatus;
    }

    /**
     * @param string $employmentstatus
     * @return CTDemographicsemployment
     */
    public function withEmploymentstatus($employmentstatus)
    {
        $new = clone $this;
        $new->employmentstatus = $employmentstatus;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirydate()
    {
        return $this->expirydate;
    }

    /**
     * @param \DateTimeInterface $expirydate
     * @return CTDemographicsemployment
     */
    public function withExpirydate($expirydate)
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmploymentrecency()
    {
        return $this->employmentrecency;
    }

    /**
     * @param string $employmentrecency
     * @return CTDemographicsemployment
     */
    public function withEmploymentrecency($employmentrecency)
    {
        $new = clone $this;
        $new->employmentrecency = $employmentrecency;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmployercategory()
    {
        return $this->employercategory;
    }

    /**
     * @param string $employercategory
     * @return CTDemographicsemployment
     */
    public function withEmployercategory($employercategory)
    {
        $new = clone $this;
        $new->employercategory = $employercategory;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeatcurrentemployer()
    {
        return $this->timeatcurrentemployer;
    }

    /**
     * @param string $timeatcurrentemployer
     * @return CTDemographicsemployment
     */
    public function withTimeatcurrentemployer($timeatcurrentemployer)
    {
        $new = clone $this;
        $new->timeatcurrentemployer = $timeatcurrentemployer;

        return $new;
    }


}

