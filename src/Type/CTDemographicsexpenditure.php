<?php

namespace PaymentAssist\Type;

class CTDemographicsexpenditure
{

    /**
     * @var int
     */
    private $totaldebitcards;

    /**
     * @var int
     */
    private $totalcreditcards;

    /**
     * @var int
     */
    private $monthlyunsecuredamount;

    /**
     * @return int
     */
    public function getTotaldebitcards()
    {
        return $this->totaldebitcards;
    }

    /**
     * @param int $totaldebitcards
     * @return CTDemographicsexpenditure
     */
    public function withTotaldebitcards($totaldebitcards)
    {
        $new = clone $this;
        $new->totaldebitcards = $totaldebitcards;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalcreditcards()
    {
        return $this->totalcreditcards;
    }

    /**
     * @param int $totalcreditcards
     * @return CTDemographicsexpenditure
     */
    public function withTotalcreditcards($totalcreditcards)
    {
        $new = clone $this;
        $new->totalcreditcards = $totalcreditcards;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonthlyunsecuredamount()
    {
        return $this->monthlyunsecuredamount;
    }

    /**
     * @param int $monthlyunsecuredamount
     * @return CTDemographicsexpenditure
     */
    public function withMonthlyunsecuredamount($monthlyunsecuredamount)
    {
        $new = clone $this;
        $new->monthlyunsecuredamount = $monthlyunsecuredamount;

        return $new;
    }


}

