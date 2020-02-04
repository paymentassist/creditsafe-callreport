<?php

namespace PaymentAssist\Type;

class CTInputaddress
{

    /**
     * @var \DateTimeInterface
     */
    private $startdate;

    /**
     * @var \DateTimeInterface
     */
    private $enddate;

    /**
     * @var string
     */
    private $duration;

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return CTInputaddress
     */
    public function withStartdate($startdate)
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param \DateTimeInterface $enddate
     * @return CTInputaddress
     */
    public function withEnddate($enddate)
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return CTInputaddress
     */
    public function withDuration($duration)
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }


}

