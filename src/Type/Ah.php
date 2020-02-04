<?php

namespace PaymentAssist\Type;

class Ah
{

    /**
     * @var string
     */
    private $m;

    /**
     * @var int
     */
    private $bal;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var string
     */
    private $acc;

    /**
     * @var string
     */
    private $pay;

    /**
     * @var int
     */
    private $stmtbal;

    /**
     * @var int
     */
    private $payamt;

    /**
     * @var int
     */
    private $cashadvcount;

    /**
     * @var int
     */
    private $cashadvtotal;

    /**
     * @return string
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * @param string $m
     * @return Ah
     */
    public function withM($m)
    {
        $new = clone $this;
        $new->m = $m;

        return $new;
    }

    /**
     * @return int
     */
    public function getBal()
    {
        return $this->bal;
    }

    /**
     * @param int $bal
     * @return Ah
     */
    public function withBal($bal)
    {
        $new = clone $this;
        $new->bal = $bal;

        return $new;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Ah
     */
    public function withLimit($limit)
    {
        $new = clone $this;
        $new->limit = $limit;

        return $new;
    }

    /**
     * @return string
     */
    public function getAcc()
    {
        return $this->acc;
    }

    /**
     * @param string $acc
     * @return Ah
     */
    public function withAcc($acc)
    {
        $new = clone $this;
        $new->acc = $acc;

        return $new;
    }

    /**
     * @return string
     */
    public function getPay()
    {
        return $this->pay;
    }

    /**
     * @param string $pay
     * @return Ah
     */
    public function withPay($pay)
    {
        $new = clone $this;
        $new->pay = $pay;

        return $new;
    }

    /**
     * @return int
     */
    public function getStmtbal()
    {
        return $this->stmtbal;
    }

    /**
     * @param int $stmtbal
     * @return Ah
     */
    public function withStmtbal($stmtbal)
    {
        $new = clone $this;
        $new->stmtbal = $stmtbal;

        return $new;
    }

    /**
     * @return int
     */
    public function getPayamt()
    {
        return $this->payamt;
    }

    /**
     * @param int $payamt
     * @return Ah
     */
    public function withPayamt($payamt)
    {
        $new = clone $this;
        $new->payamt = $payamt;

        return $new;
    }

    /**
     * @return int
     */
    public function getCashadvcount()
    {
        return $this->cashadvcount;
    }

    /**
     * @param int $cashadvcount
     * @return Ah
     */
    public function withCashadvcount($cashadvcount)
    {
        $new = clone $this;
        $new->cashadvcount = $cashadvcount;

        return $new;
    }

    /**
     * @return int
     */
    public function getCashadvtotal()
    {
        return $this->cashadvtotal;
    }

    /**
     * @param int $cashadvtotal
     * @return Ah
     */
    public function withCashadvtotal($cashadvtotal)
    {
        $new = clone $this;
        $new->cashadvtotal = $cashadvtotal;

        return $new;
    }


}

