<?php

namespace PaymentAssist\Type;

class CTOutputinsolvency
{
    /**
     * The end date of the Insolvency
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dischargedate = null;

    /**
     * Line of Business
     *
     * @var null | string
     */
    private ?string $lineofbusiness = null;

    /**
     * Court name
     *
     * @var null | string
     */
    private ?string $courtname = null;

    /**
     * Current status of the Insolvency
     * The list of possible values can be obtained from the web method LookupData07a table id = insolvencystatus
     *
     * @var string
     */
    private string $currentstatus;

    /**
     * Total amount of the Insolvency
     *
     * @var null | int
     */
    private ?int $amount = null;

    /**
     * Type of Insolvency
     * The list of possible values can be obtained from the web method LookupData07a table id = insolvencytype
     *
     * @var string
     */
    private string $ordertype;

    /**
     * Start date of the Insolvency
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $orderdate = null;

    /**
     * Case Year
     *
     * @var null | int
     */
    private ?int $caseyear = null;

    /**
     * Case reference
     *
     * @var null | string
     */
    private ?string $caseref = null;

    /**
     * Restriction information
     *
     * @var null | \PaymentAssist\Type\Restriction
     */
    private ?\PaymentAssist\Type\Restriction $restriction = null;

    /**
     * Name details as provided on the Insolvency
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Trading name
     *
     * @var null | string
     */
    private ?string $tradingname = null;

    /**
     * Address details as provided on the Insolvency
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * Date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * Set of Dispute and Correction Notices against the Insolvency
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return null | \DateTimeInterface
     */
    public function getDischargedate() : ?\DateTimeInterface
    {
        return $this->dischargedate;
    }

    /**
     * @param null | \DateTimeInterface $dischargedate
     * @return static
     */
    public function withDischargedate(?\DateTimeInterface $dischargedate) : static
    {
        $new = clone $this;
        $new->dischargedate = $dischargedate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLineofbusiness() : ?string
    {
        return $this->lineofbusiness;
    }

    /**
     * @param null | string $lineofbusiness
     * @return static
     */
    public function withLineofbusiness(?string $lineofbusiness) : static
    {
        $new = clone $this;
        $new->lineofbusiness = $lineofbusiness;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCourtname() : ?string
    {
        return $this->courtname;
    }

    /**
     * @param null | string $courtname
     * @return static
     */
    public function withCourtname(?string $courtname) : static
    {
        $new = clone $this;
        $new->courtname = $courtname;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrentstatus() : string
    {
        return $this->currentstatus;
    }

    /**
     * @param string $currentstatus
     * @return static
     */
    public function withCurrentstatus(string $currentstatus) : static
    {
        $new = clone $this;
        $new->currentstatus = $currentstatus;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAmount() : ?int
    {
        return $this->amount;
    }

    /**
     * @param null | int $amount
     * @return static
     */
    public function withAmount(?int $amount) : static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrdertype() : string
    {
        return $this->ordertype;
    }

    /**
     * @param string $ordertype
     * @return static
     */
    public function withOrdertype(string $ordertype) : static
    {
        $new = clone $this;
        $new->ordertype = $ordertype;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getOrderdate() : ?\DateTimeInterface
    {
        return $this->orderdate;
    }

    /**
     * @param null | \DateTimeInterface $orderdate
     * @return static
     */
    public function withOrderdate(?\DateTimeInterface $orderdate) : static
    {
        $new = clone $this;
        $new->orderdate = $orderdate;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCaseyear() : ?int
    {
        return $this->caseyear;
    }

    /**
     * @param null | int $caseyear
     * @return static
     */
    public function withCaseyear(?int $caseyear) : static
    {
        $new = clone $this;
        $new->caseyear = $caseyear;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCaseref() : ?string
    {
        return $this->caseref;
    }

    /**
     * @param null | string $caseref
     * @return static
     */
    public function withCaseref(?string $caseref) : static
    {
        $new = clone $this;
        $new->caseref = $caseref;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Restriction
     */
    public function getRestriction() : ?\PaymentAssist\Type\Restriction
    {
        return $this->restriction;
    }

    /**
     * @param null | \PaymentAssist\Type\Restriction $restriction
     * @return static
     */
    public function withRestriction(?\PaymentAssist\Type\Restriction $restriction) : static
    {
        $new = clone $this;
        $new->restriction = $restriction;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTradingname() : ?string
    {
        return $this->tradingname;
    }

    /**
     * @param null | string $tradingname
     * @return static
     */
    public function withTradingname(?string $tradingname) : static
    {
        $new = clone $this;
        $new->tradingname = $tradingname;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress() : ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDob() : ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob) : static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice() : array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice) : static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }
}

