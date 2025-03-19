<?php

namespace PaymentAssist\Type;

class CTOutputcifascasedata
{
    /**
     * Owning member reference number
     *
     * @var int
     */
    private int $owningmember;

    /**
     * Managing member reference number
     *
     * @var int
     */
    private int $managingmember;

    /**
     * CIFAS Case Type
     * The list of possible values can be obtained from the web method LookupData07a table id = cifascasetype
     *
     * @var string
     */
    private string $casetype;

    /**
     * CIFAS Product code
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasproductcode
     *
     * @var string
     */
    private string $productcode;

    /**
     * An indication of whether the financial facility was granted or not
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasfacility
     *
     * @var string
     */
    private string $facility;

    /**
     * The exact date upon which a confirmed fraud originally became live on the CIFAS database
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $supplydate;

    /**
     * The date upon which a confirmed fraud becomes expired on the CIFAS database
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $expirydate;

    /**
     * The date upon which an application for credit was made
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $applicationdate = null;

    /**
     * @var \PaymentAssist\Type\Filingreasons
     */
    private \PaymentAssist\Type\Filingreasons $filingreasons;

    /**
     * @var \PaymentAssist\Type\Subjects
     */
    private \PaymentAssist\Type\Subjects $subjects;

    /**
     * @return int
     */
    public function getOwningmember() : int
    {
        return $this->owningmember;
    }

    /**
     * @param int $owningmember
     * @return static
     */
    public function withOwningmember(int $owningmember) : static
    {
        $new = clone $this;
        $new->owningmember = $owningmember;

        return $new;
    }

    /**
     * @return int
     */
    public function getManagingmember() : int
    {
        return $this->managingmember;
    }

    /**
     * @param int $managingmember
     * @return static
     */
    public function withManagingmember(int $managingmember) : static
    {
        $new = clone $this;
        $new->managingmember = $managingmember;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasetype() : string
    {
        return $this->casetype;
    }

    /**
     * @param string $casetype
     * @return static
     */
    public function withCasetype(string $casetype) : static
    {
        $new = clone $this;
        $new->casetype = $casetype;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductcode() : string
    {
        return $this->productcode;
    }

    /**
     * @param string $productcode
     * @return static
     */
    public function withProductcode(string $productcode) : static
    {
        $new = clone $this;
        $new->productcode = $productcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getFacility() : string
    {
        return $this->facility;
    }

    /**
     * @param string $facility
     * @return static
     */
    public function withFacility(string $facility) : static
    {
        $new = clone $this;
        $new->facility = $facility;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSupplydate() : \DateTimeInterface
    {
        return $this->supplydate;
    }

    /**
     * @param \DateTimeInterface $supplydate
     * @return static
     */
    public function withSupplydate(\DateTimeInterface $supplydate) : static
    {
        $new = clone $this;
        $new->supplydate = $supplydate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirydate() : \DateTimeInterface
    {
        return $this->expirydate;
    }

    /**
     * @param \DateTimeInterface $expirydate
     * @return static
     */
    public function withExpirydate(\DateTimeInterface $expirydate) : static
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getApplicationdate() : ?\DateTimeInterface
    {
        return $this->applicationdate;
    }

    /**
     * @param null | \DateTimeInterface $applicationdate
     * @return static
     */
    public function withApplicationdate(?\DateTimeInterface $applicationdate) : static
    {
        $new = clone $this;
        $new->applicationdate = $applicationdate;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Filingreasons
     */
    public function getFilingreasons() : \PaymentAssist\Type\Filingreasons
    {
        return $this->filingreasons;
    }

    /**
     * @param \PaymentAssist\Type\Filingreasons $filingreasons
     * @return static
     */
    public function withFilingreasons(\PaymentAssist\Type\Filingreasons $filingreasons) : static
    {
        $new = clone $this;
        $new->filingreasons = $filingreasons;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Subjects
     */
    public function getSubjects() : \PaymentAssist\Type\Subjects
    {
        return $this->subjects;
    }

    /**
     * @param \PaymentAssist\Type\Subjects $subjects
     * @return static
     */
    public function withSubjects(\PaymentAssist\Type\Subjects $subjects) : static
    {
        $new = clone $this;
        $new->subjects = $subjects;

        return $new;
    }
}

