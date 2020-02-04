<?php

namespace PaymentAssist\Type;

class CTHho
{

    /**
     * @var \PaymentAssist\Type\Creditscores
     */
    private $creditscores;

    /**
     * @var \PaymentAssist\Type\CTHhosummary
     */
    private $summary;

    /**
     * @var int
     */
    private $thinfile;

    /**
     * @var int
     */
    private $total;

    /**
     * @return \PaymentAssist\Type\Creditscores
     */
    public function getCreditscores()
    {
        return $this->creditscores;
    }

    /**
     * @param \PaymentAssist\Type\Creditscores $creditscores
     * @return CTHho
     */
    public function withCreditscores($creditscores)
    {
        $new = clone $this;
        $new->creditscores = $creditscores;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTHhosummary
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param \PaymentAssist\Type\CTHhosummary $summary
     * @return CTHho
     */
    public function withSummary($summary)
    {
        $new = clone $this;
        $new->summary = $summary;

        return $new;
    }

    /**
     * @return int
     */
    public function getThinfile()
    {
        return $this->thinfile;
    }

    /**
     * @param int $thinfile
     * @return CTHho
     */
    public function withThinfile($thinfile)
    {
        $new = clone $this;
        $new->thinfile = $thinfile;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return CTHho
     */
    public function withTotal($total)
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }


}

