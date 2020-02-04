<?php

namespace PaymentAssist\Type;

class CTOutputaddresslink
{

    /**
     * @var \DateTimeInterface
     */
    private $creationdate;

    /**
     * @var \DateTimeInterface
     */
    private $lastconfdate;

    /**
     * @var \PaymentAssist\Type\CTSupplierdetails
     */
    private $supplierdetails;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @var int
     */
    private $from;

    /**
     * @var int
     */
    private $to;

    /**
     * @return \DateTimeInterface
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTimeInterface $creationdate
     * @return CTOutputaddresslink
     */
    public function withCreationdate($creationdate)
    {
        $new = clone $this;
        $new->creationdate = $creationdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastconfdate()
    {
        return $this->lastconfdate;
    }

    /**
     * @param \DateTimeInterface $lastconfdate
     * @return CTOutputaddresslink
     */
    public function withLastconfdate($lastconfdate)
    {
        $new = clone $this;
        $new->lastconfdate = $lastconfdate;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSupplierdetails
     */
    public function getSupplierdetails()
    {
        return $this->supplierdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTSupplierdetails $supplierdetails
     * @return CTOutputaddresslink
     */
    public function withSupplierdetails($supplierdetails)
    {
        $new = clone $this;
        $new->supplierdetails = $supplierdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $notice
     * @return CTOutputaddresslink
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param int $from
     * @return CTOutputaddresslink
     */
    public function withFrom($from)
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }

    /**
     * @return int
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param int $to
     * @return CTOutputaddresslink
     */
    public function withTo($to)
    {
        $new = clone $this;
        $new->to = $to;

        return $new;
    }


}

