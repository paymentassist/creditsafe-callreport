<?php

namespace PaymentAssist\Type;

class CTSummarytpd
{
    /**
     * Level of data requested and returned for Alert Decision individuals
     * The list of possible values can be obtained from the web method LookupData07a table id = Alert
     *
     * @var int
     */
    private int $alertdecision;

    /**
     * Level of data requested and returned for Alert Review Individuals
     * The list of possible values can be obtained from the web method LookupData07a table id = Alert
     *
     * @var int
     */
    private int $alertreview;

    /**
     * Level of data requested and returned for Household Override Individuals
     * The list of possible values can be obtained from the web method LookupData07a table id = Alert
     *
     * @var int
     */
    private int $hho;

    /**
     * @return int
     */
    public function getAlertdecision(): int
    {
        return $this->alertdecision;
    }

    /**
     * @param int $alertdecision
     * @return static
     */
    public function withAlertdecision(int $alertdecision): static
    {
        $new = clone $this;
        $new->alertdecision = $alertdecision;

        return $new;
    }

    /**
     * @return int
     */
    public function getAlertreview(): int
    {
        return $this->alertreview;
    }

    /**
     * @param int $alertreview
     * @return static
     */
    public function withAlertreview(int $alertreview): static
    {
        $new = clone $this;
        $new->alertreview = $alertreview;

        return $new;
    }

    /**
     * @return int
     */
    public function getHho(): int
    {
        return $this->hho;
    }

    /**
     * @param int $hho
     * @return static
     */
    public function withHho(int $hho): static
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }
}

