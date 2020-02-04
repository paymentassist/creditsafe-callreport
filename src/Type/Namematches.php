<?php

namespace PaymentAssist\Type;

class Namematches
{

    /**
     * @var \PaymentAssist\Type\Namematch
     */
    private $namematch;

    /**
     * @var string
     */
    private $reporttype;

    /**
     * @var string
     */
    private $matchstatus;

    /**
     * @return \PaymentAssist\Type\Namematch
     */
    public function getNamematch()
    {
        return $this->namematch;
    }

    /**
     * @param \PaymentAssist\Type\Namematch $namematch
     * @return Namematches
     */
    public function withNamematch($namematch)
    {
        $new = clone $this;
        $new->namematch = $namematch;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttype()
    {
        return $this->reporttype;
    }

    /**
     * @param string $reporttype
     * @return Namematches
     */
    public function withReporttype($reporttype)
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchstatus()
    {
        return $this->matchstatus;
    }

    /**
     * @param string $matchstatus
     * @return Namematches
     */
    public function withMatchstatus($matchstatus)
    {
        $new = clone $this;
        $new->matchstatus = $matchstatus;

        return $new;
    }


}

