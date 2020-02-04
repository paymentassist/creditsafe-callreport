<?php

namespace PaymentAssist\Type;

class Fullmatches
{

    /**
     * @var \PaymentAssist\Type\Fullmatch
     */
    private $fullmatch;

    /**
     * @var string
     */
    private $reporttype;

    /**
     * @var string
     */
    private $matchstatus;

    /**
     * @return \PaymentAssist\Type\Fullmatch
     */
    public function getFullmatch()
    {
        return $this->fullmatch;
    }

    /**
     * @param \PaymentAssist\Type\Fullmatch $fullmatch
     * @return Fullmatches
     */
    public function withFullmatch($fullmatch)
    {
        $new = clone $this;
        $new->fullmatch = $fullmatch;

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
     * @return Fullmatches
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
     * @return Fullmatches
     */
    public function withMatchstatus($matchstatus)
    {
        $new = clone $this;
        $new->matchstatus = $matchstatus;

        return $new;
    }


}

