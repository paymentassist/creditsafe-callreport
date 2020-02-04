<?php

namespace PaymentAssist\Type;

class Filingreasons
{

    /**
     * @var string
     */
    private $filingreason;

    /**
     * @return string
     */
    public function getFilingreason()
    {
        return $this->filingreason;
    }

    /**
     * @param string $filingreason
     * @return Filingreasons
     */
    public function withFilingreason($filingreason)
    {
        $new = clone $this;
        $new->filingreason = $filingreason;

        return $new;
    }


}

