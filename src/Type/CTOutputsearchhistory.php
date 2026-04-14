<?php

namespace PaymentAssist\Type;

class CTOutputsearchhistory
{
    /**
     * Unique Search reference identifier
     *
     * @var string
     */
    private string $searchref;

    /**
     * Type of organisation carrying out the Search
     * The list of possible values can be obtained from the web method LookupData07a table id = companytype
     *
     * @var string
     */
    private string $searchorgtype;

    /**
     * Name of organisation carrying out the Search (own organisations only)
     *
     * @var null | string
     */
    private ?string $searchorgname = null;

    /**
     * Your reference supplied on the Search (own organisations only)
     *
     * @var null | string
     */
    private ?string $yourreference = null;

    /**
     * Name of organisational unit carrying out the Search (own organisations only)
     *
     * @var null | string
     */
    private ?string $searchunitname = null;

    /**
     * A value of 1 indicates that this was user's own organisation
     *
     * @var int
     */
    private int $ownsearch;

    /**
     * A value of 1 indicates this was a subsequent enquiry
     *
     * @var int
     */
    private int $subsequentenquiry;

    /**
     * Username of user carrying out the Search (own organisations only)
     *
     * @var null | string
     */
    private ?string $username = null;

    /**
     * Search purpose
     * The list of possible values can be obtained from the web method LookupData07a table id = searchpurpose
     *
     * @var string
     */
    private string $searchpurpose;

    /**
     * Credit type
     * The list of possible values can be obtained from the web method LookupData07a table id = credittype
     *
     * @var null | string
     */
    private ?string $credittype = null;

    /**
     * Balance or credit limit applied for
     *
     * @var null | int
     */
    private ?int $balance = null;

    /**
     * Term of loan applied for
     *
     * @var null | int
     */
    private ?int $term = null;

    /**
     * A value of 1 indicates that this Search was a joint application
     *
     * @var int
     */
    private int $jointapplication;

    /**
     * Date of Search
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $searchdate = null;

    /**
     * Name details input for this Search
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Applicant's date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * Address details for this Search
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * Move in date specified for this Search
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * Move out date specified for this Search
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * A value of 1 indicates that the applicant opted out of use of third party data
     *
     * @var null | int
     */
    private ?int $tpoptout = null;

    /**
     * A value of 1 indicates that no financial association was generated from the application (transient association). This flag only applies to joint applications.
     *
     * @var null | int
     */
    private ?int $transient = null;

    /**
     * Link Report Type (Non, Address, Associate) - this is only returned on Limited Subject Access Reports (LSARs)
     * The list of possible values can be obtained from the web method LookupData07a table id = linkreporttype
     *
     * @var null | int
     */
    private ?int $linktype = null;

    /**
     * @return string
     */
    public function getSearchref(): string
    {
        return $this->searchref;
    }

    /**
     * @param string $searchref
     * @return static
     */
    public function withSearchref(string $searchref): static
    {
        $new = clone $this;
        $new->searchref = $searchref;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchorgtype(): string
    {
        return $this->searchorgtype;
    }

    /**
     * @param string $searchorgtype
     * @return static
     */
    public function withSearchorgtype(string $searchorgtype): static
    {
        $new = clone $this;
        $new->searchorgtype = $searchorgtype;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSearchorgname(): ?string
    {
        return $this->searchorgname;
    }

    /**
     * @param null | string $searchorgname
     * @return static
     */
    public function withSearchorgname(?string $searchorgname): static
    {
        $new = clone $this;
        $new->searchorgname = $searchorgname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getYourreference(): ?string
    {
        return $this->yourreference;
    }

    /**
     * @param null | string $yourreference
     * @return static
     */
    public function withYourreference(?string $yourreference): static
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSearchunitname(): ?string
    {
        return $this->searchunitname;
    }

    /**
     * @param null | string $searchunitname
     * @return static
     */
    public function withSearchunitname(?string $searchunitname): static
    {
        $new = clone $this;
        $new->searchunitname = $searchunitname;

        return $new;
    }

    /**
     * @return int
     */
    public function getOwnsearch(): int
    {
        return $this->ownsearch;
    }

    /**
     * @param int $ownsearch
     * @return static
     */
    public function withOwnsearch(int $ownsearch): static
    {
        $new = clone $this;
        $new->ownsearch = $ownsearch;

        return $new;
    }

    /**
     * @return int
     */
    public function getSubsequentenquiry(): int
    {
        return $this->subsequentenquiry;
    }

    /**
     * @param int $subsequentenquiry
     * @return static
     */
    public function withSubsequentenquiry(int $subsequentenquiry): static
    {
        $new = clone $this;
        $new->subsequentenquiry = $subsequentenquiry;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param null | string $username
     * @return static
     */
    public function withUsername(?string $username): static
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchpurpose(): string
    {
        return $this->searchpurpose;
    }

    /**
     * @param string $searchpurpose
     * @return static
     */
    public function withSearchpurpose(string $searchpurpose): static
    {
        $new = clone $this;
        $new->searchpurpose = $searchpurpose;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCredittype(): ?string
    {
        return $this->credittype;
    }

    /**
     * @param null | string $credittype
     * @return static
     */
    public function withCredittype(?string $credittype): static
    {
        $new = clone $this;
        $new->credittype = $credittype;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param null | int $balance
     * @return static
     */
    public function withBalance(?int $balance): static
    {
        $new = clone $this;
        $new->balance = $balance;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTerm(): ?int
    {
        return $this->term;
    }

    /**
     * @param null | int $term
     * @return static
     */
    public function withTerm(?int $term): static
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return int
     */
    public function getJointapplication(): int
    {
        return $this->jointapplication;
    }

    /**
     * @param int $jointapplication
     * @return static
     */
    public function withJointapplication(int $jointapplication): static
    {
        $new = clone $this;
        $new->jointapplication = $jointapplication;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getSearchdate(): ?\DateTimeInterface
    {
        return $this->searchdate;
    }

    /**
     * @param null | \DateTimeInterface $searchdate
     * @return static
     */
    public function withSearchdate(?\DateTimeInterface $searchdate): static
    {
        $new = clone $this;
        $new->searchdate = $searchdate;

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
     * @return null | \DateTimeInterface
     */
    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob): static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress(): ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param null | \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(?\DateTimeInterface $startdate): static
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    /**
     * @param null | \DateTimeInterface $enddate
     * @return static
     */
    public function withEnddate(?\DateTimeInterface $enddate): static
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTpoptout(): ?int
    {
        return $this->tpoptout;
    }

    /**
     * @param null | int $tpoptout
     * @return static
     */
    public function withTpoptout(?int $tpoptout): static
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTransient(): ?int
    {
        return $this->transient;
    }

    /**
     * @param null | int $transient
     * @return static
     */
    public function withTransient(?int $transient): static
    {
        $new = clone $this;
        $new->transient = $transient;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLinktype(): ?int
    {
        return $this->linktype;
    }

    /**
     * @param null | int $linktype
     * @return static
     */
    public function withLinktype(?int $linktype): static
    {
        $new = clone $this;
        $new->linktype = $linktype;

        return $new;
    }
}

