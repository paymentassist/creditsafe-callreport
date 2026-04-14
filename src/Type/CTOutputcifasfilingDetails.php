<?php

namespace PaymentAssist\Type;

class CTOutputcifasfilingDetails
{
    /**
     * Owning member reference number
     *
     * @var int
     */
    private int $membernumber;

    /**
     * Case reference number
     *
     * @var string
     */
    private string $casereferenceno;

    /**
     * Member name
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Product code
     * The list of possible values can be obtained from the web method LookupData07a table id = cifasproductcode
     *
     * @var string
     */
    private string $productcode;

    /**
     * Fraud category
     * The list of possible values can be obtained from the web method LookupData07a table id = cifascategory
     *
     * @var string
     */
    private string $fraudcategory;

    /**
     * Description of product code
     *
     * @var null | string
     */
    private ?string $productdesc = null;

    /**
     * Description of fraud category
     *
     * @var null | string
     */
    private ?string $frauddesc = null;

    /**
     * The exact date upon which a confirmed fraud originally became live on the CIFAS database
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $inputdate;

    /**
     * The date upon which a confirmed fraud becomes expired on the CIFAS database
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $expirydate = null;

    /**
     * Transaction type
     * The list of possible values can be obtained from the web method LookupData07a table id = cifastransaction
     *
     * @var string
     */
    private string $transactiontype;

    /**
     * @return int
     */
    public function getMembernumber(): int
    {
        return $this->membernumber;
    }

    /**
     * @param int $membernumber
     * @return static
     */
    public function withMembernumber(int $membernumber): static
    {
        $new = clone $this;
        $new->membernumber = $membernumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasereferenceno(): string
    {
        return $this->casereferenceno;
    }

    /**
     * @param string $casereferenceno
     * @return static
     */
    public function withCasereferenceno(string $casereferenceno): static
    {
        $new = clone $this;
        $new->casereferenceno = $casereferenceno;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductcode(): string
    {
        return $this->productcode;
    }

    /**
     * @param string $productcode
     * @return static
     */
    public function withProductcode(string $productcode): static
    {
        $new = clone $this;
        $new->productcode = $productcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getFraudcategory(): string
    {
        return $this->fraudcategory;
    }

    /**
     * @param string $fraudcategory
     * @return static
     */
    public function withFraudcategory(string $fraudcategory): static
    {
        $new = clone $this;
        $new->fraudcategory = $fraudcategory;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProductdesc(): ?string
    {
        return $this->productdesc;
    }

    /**
     * @param null | string $productdesc
     * @return static
     */
    public function withProductdesc(?string $productdesc): static
    {
        $new = clone $this;
        $new->productdesc = $productdesc;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFrauddesc(): ?string
    {
        return $this->frauddesc;
    }

    /**
     * @param null | string $frauddesc
     * @return static
     */
    public function withFrauddesc(?string $frauddesc): static
    {
        $new = clone $this;
        $new->frauddesc = $frauddesc;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInputdate(): \DateTimeInterface
    {
        return $this->inputdate;
    }

    /**
     * @param \DateTimeInterface $inputdate
     * @return static
     */
    public function withInputdate(\DateTimeInterface $inputdate): static
    {
        $new = clone $this;
        $new->inputdate = $inputdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getExpirydate(): ?\DateTimeInterface
    {
        return $this->expirydate;
    }

    /**
     * @param null | \DateTimeInterface $expirydate
     * @return static
     */
    public function withExpirydate(?\DateTimeInterface $expirydate): static
    {
        $new = clone $this;
        $new->expirydate = $expirydate;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransactiontype(): string
    {
        return $this->transactiontype;
    }

    /**
     * @param string $transactiontype
     * @return static
     */
    public function withTransactiontype(string $transactiontype): static
    {
        $new = clone $this;
        $new->transactiontype = $transactiontype;

        return $new;
    }
}

