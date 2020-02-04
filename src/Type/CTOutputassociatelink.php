<?php

namespace PaymentAssist\Type;

class CTOutputassociatelink
{

    /**
     * @var string
     */
    private $navlinkid;

    /**
     * @var string
     */
    private $name;

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
    private $declaredaddress;

    /**
     * @var int
     */
    private $oiaid;

    /**
     * @return string
     */
    public function getNavlinkid()
    {
        return $this->navlinkid;
    }

    /**
     * @param string $navlinkid
     * @return CTOutputassociatelink
     */
    public function withNavlinkid($navlinkid)
    {
        $new = clone $this;
        $new->navlinkid = $navlinkid;

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
     * @return CTOutputassociatelink
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTimeInterface $creationdate
     * @return CTOutputassociatelink
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
     * @return CTOutputassociatelink
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
     * @return CTOutputassociatelink
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
     * @return CTOutputassociatelink
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
    public function getDeclaredaddress()
    {
        return $this->declaredaddress;
    }

    /**
     * @param int $declaredaddress
     * @return CTOutputassociatelink
     */
    public function withDeclaredaddress($declaredaddress)
    {
        $new = clone $this;
        $new->declaredaddress = $declaredaddress;

        return $new;
    }

    /**
     * @return int
     */
    public function getOiaid()
    {
        return $this->oiaid;
    }

    /**
     * @param int $oiaid
     * @return CTOutputassociatelink
     */
    public function withOiaid($oiaid)
    {
        $new = clone $this;
        $new->oiaid = $oiaid;

        return $new;
    }


}

