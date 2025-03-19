<?php

namespace PaymentAssist\Type;

use \PaymentAssist\Type\CTAddress;

class CTInputaddress extends CTAddress
{
    /**
     * The date the applicant moved into the residence
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * The date the applicant moved out of the residence
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * Duration of residency
     *
     * @var null | mixed
     */
    private mixed $duration = null;

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

    /**
     * @return null | mixed
     */
    public function getDuration() : mixed
    {
        return $this->duration;
    }

    /**
     * @param null | mixed $duration
     * @return static
     */
    public function withDuration(mixed $duration) : static
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }
}

