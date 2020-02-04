<?php

namespace PaymentAssist\Type;

class CTOutputaliaslink
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $alias;

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
    private $declared;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CTOutputaliaslink
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
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return CTOutputaliaslink
     */
    public function withAlias($alias)
    {
        $new = clone $this;
        $new->alias = $alias;

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
     * @return CTOutputaliaslink
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
     * @return CTOutputaliaslink
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
     * @return CTOutputaliaslink
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
     * @return CTOutputaliaslink
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
    public function getDeclared()
    {
        return $this->declared;
    }

    /**
     * @param int $declared
     * @return CTOutputaliaslink
     */
    public function withDeclared($declared)
    {
        $new = clone $this;
        $new->declared = $declared;

        return $new;
    }


}

