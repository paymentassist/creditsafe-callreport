<?php

namespace PaymentAssist\Type;

class CTOutputcifascasedata
{

    /**
     * @var int
     */
    private $owningmember;

    /**
     * @var int
     */
    private $managingmember;

    /**
     * @var string
     */
    private $casetype;

    /**
     * @var string
     */
    private $productcode;

    /**
     * @var string
     */
    private $facility;

    /**
     * @var \DateTimeInterface
     */
    private $supplydate;

    /**
     * @var \DateTimeInterface
     */
    private $expirydate;

    /**
     * @var \DateTimeInterface
     */
    private $applicationdate;

    /**
     * @var \PaymentAssist\Type\Filingreasons
     */
    private $filingreasons;

    /**
     * @var \PaymentAssist\Type\Subjects
     */
    private $subjects;

    /**
     * @return int
     */
    public function getOwningmember()
    {
        return $this->owningmember;
    }

    /**
     * @param int $owningmember
     * @return CTOutputcifascasedata
     */
    public function withOwningmember($owningmember)
    {
        $new = clone $this;
        $new->owningmember = $owningmember;

        return $new;
    }

    /**
     * @return int
     */
    public function getManagingmember()
    {
        return $this->managingmember;
    }

    /**
     * @param int $managingmember
     * @return CTOutputcifascasedata
     */
    public function withManagingmember($managingmember)
    {
        $new = clone $this;
        $new->managingmember = $managingmember;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasetype()
    {
        return $this->casetype;
    }

    /**
     * @param string $casetype
     * @return CTOutputcifascasedata
     */
    public function withCasetype($casetype)
    {
        $new = clone $this;
        $new->casetype = $casetype;

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
     * @return CTOutputcifascasedata
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
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * @param string $facility
     * @return CTOutputcifascasedata
     */
    public function withFacility($facility)
    {
        $new = clone $this;
        $new->facility = $facility;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSupplydate()
    {
        return $this->supplydate;
    }

    /**
     * @param \DateTimeInterface $supplydate
     * @return CTOutputcifascasedata
     */
    public function withSupplydate($supplydate)
    {
        $new = clone $this;
        $new->supplydate = $supplydate;

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
     * @return CTOutputcifascasedata
     */
    public function withExpirydate($expirydate)
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getApplicationdate()
    {
        return $this->applicationdate;
    }

    /**
     * @param \DateTimeInterface $applicationdate
     * @return CTOutputcifascasedata
     */
    public function withApplicationdate($applicationdate)
    {
        $new = clone $this;
        $new->applicationdate = $applicationdate;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Filingreasons
     */
    public function getFilingreasons()
    {
        return $this->filingreasons;
    }

    /**
     * @param \PaymentAssist\Type\Filingreasons $filingreasons
     * @return CTOutputcifascasedata
     */
    public function withFilingreasons($filingreasons)
    {
        $new = clone $this;
        $new->filingreasons = $filingreasons;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Subjects
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param \PaymentAssist\Type\Subjects $subjects
     * @return CTOutputcifascasedata
     */
    public function withSubjects($subjects)
    {
        $new = clone $this;
        $new->subjects = $subjects;

        return $new;
    }


}

