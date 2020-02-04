<?php

namespace PaymentAssist\Type;

class CTSummarytpd
{

    /**
     * @var int
     */
    private $alertdecision;

    /**
     * @var int
     */
    private $alertreview;

    /**
     * @var int
     */
    private $hho;

    /**
     * @return int
     */
    public function getAlertdecision()
    {
        return $this->alertdecision;
    }

    /**
     * @param int $alertdecision
     * @return CTSummarytpd
     */
    public function withAlertdecision($alertdecision)
    {
        $new = clone $this;
        $new->alertdecision = $alertdecision;

        return $new;
    }

    /**
     * @return int
     */
    public function getAlertreview()
    {
        return $this->alertreview;
    }

    /**
     * @param int $alertreview
     * @return CTSummarytpd
     */
    public function withAlertreview($alertreview)
    {
        $new = clone $this;
        $new->alertreview = $alertreview;

        return $new;
    }

    /**
     * @return int
     */
    public function getHho()
    {
        return $this->hho;
    }

    /**
     * @param int $hho
     * @return CTSummarytpd
     */
    public function withHho($hho)
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }


}

