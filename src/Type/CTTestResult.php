<?php

namespace PaymentAssist\Type;

class CTTestResult
{

    /**
     * @var \DateTimeInterface
     */
    private $datetime;

    /**
     * @return \DateTimeInterface
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * @param \DateTimeInterface $datetime
     * @return CTTestResult
     */
    public function withDatetime($datetime)
    {
        $new = clone $this;
        $new->datetime = $datetime;

        return $new;
    }


}

