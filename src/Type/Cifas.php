<?php

namespace PaymentAssist\Type;

class Cifas
{

    /**
     * @var \PaymentAssist\Type\CTOutputcifasfiling
     */
    private $filing;

    /**
     * @var \PaymentAssist\Type\CTOutputcifascase
     */
    private $case;

    /**
     * @return \PaymentAssist\Type\CTOutputcifasfiling
     */
    public function getFiling()
    {
        return $this->filing;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifasfiling $filing
     * @return Cifas
     */
    public function withFiling($filing)
    {
        $new = clone $this;
        $new->filing = $filing;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifascase
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifascase $case
     * @return Cifas
     */
    public function withCase($case)
    {
        $new = clone $this;
        $new->case = $case;

        return $new;
    }


}

