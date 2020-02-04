<?php

namespace PaymentAssist\Type;

class Details
{

    /**
     * @var int
     */
    private $membernumber;

    /**
     * @var string
     */
    private $casereferenceno;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $productcode;

    /**
     * @var string
     */
    private $fraudcategory;

    /**
     * @var string
     */
    private $productdesc;

    /**
     * @var string
     */
    private $frauddesc;

    /**
     * @var \DateTimeInterface
     */
    private $inputdate;

    /**
     * @var \DateTimeInterface
     */
    private $expirydate;

    /**
     * @var string
     */
    private $transactiontype;

    /**
     * @return int
     */
    public function getMembernumber()
    {
        return $this->membernumber;
    }

    /**
     * @param int $membernumber
     * @return Details
     */
    public function withMembernumber($membernumber)
    {
        $new = clone $this;
        $new->membernumber = $membernumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasereferenceno()
    {
        return $this->casereferenceno;
    }

    /**
     * @param string $casereferenceno
     * @return Details
     */
    public function withCasereferenceno($casereferenceno)
    {
        $new = clone $this;
        $new->casereferenceno = $casereferenceno;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Details
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductcode()
    {
        return $this->productcode;
    }

    /**
     * @param string $productcode
     * @return Details
     */
    public function withProductcode($productcode)
    {
        $new = clone $this;
        $new->productcode = $productcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getFraudcategory()
    {
        return $this->fraudcategory;
    }

    /**
     * @param string $fraudcategory
     * @return Details
     */
    public function withFraudcategory($fraudcategory)
    {
        $new = clone $this;
        $new->fraudcategory = $fraudcategory;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductdesc()
    {
        return $this->productdesc;
    }

    /**
     * @param string $productdesc
     * @return Details
     */
    public function withProductdesc($productdesc)
    {
        $new = clone $this;
        $new->productdesc = $productdesc;

        return $new;
    }

    /**
     * @return string
     */
    public function getFrauddesc()
    {
        return $this->frauddesc;
    }

    /**
     * @param string $frauddesc
     * @return Details
     */
    public function withFrauddesc($frauddesc)
    {
        $new = clone $this;
        $new->frauddesc = $frauddesc;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInputdate()
    {
        return $this->inputdate;
    }

    /**
     * @param \DateTimeInterface $inputdate
     * @return Details
     */
    public function withInputdate($inputdate)
    {
        $new = clone $this;
        $new->inputdate = $inputdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirydate()
    {
        return $this->expirydate;
    }

    /**
     * @param \DateTimeInterface $expirydate
     * @return Details
     */
    public function withExpirydate($expirydate)
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactiontype()
    {
        return $this->transactiontype;
    }

    /**
     * @param string $transactiontype
     * @return Details
     */
    public function withTransactiontype($transactiontype)
    {
        $new = clone $this;
        $new->transactiontype = $transactiontype;

        return $new;
    }


}

