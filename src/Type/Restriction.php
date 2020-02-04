<?php

namespace PaymentAssist\Type;

class Restriction
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var \DateTimeInterface
     */
    private $startdate;

    /**
     * @var \DateTimeInterface
     */
    private $enddate;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Restriction
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return Restriction
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
     * @return Restriction
     */
    public function withEnddate($enddate)
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }


}

