<?php

namespace PaymentAssist\Type;

class CTOutputsearchhistory
{

    /**
     * @var string
     */
    private $searchref;

    /**
     * @var string
     */
    private $searchorgtype;

    /**
     * @var string
     */
    private $searchorgname;

    /**
     * @var string
     */
    private $yourreference;

    /**
     * @var string
     */
    private $searchunitname;

    /**
     * @var int
     */
    private $ownsearch;

    /**
     * @var int
     */
    private $subsequentenquiry;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $searchpurpose;

    /**
     * @var string
     */
    private $credittype;

    /**
     * @var int
     */
    private $balance;

    /**
     * @var int
     */
    private $term;

    /**
     * @var int
     */
    private $jointapplication;

    /**
     * @var \DateTimeInterface
     */
    private $searchdate;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @var \DateTimeInterface
     */
    private $startdate;

    /**
     * @var \DateTimeInterface
     */
    private $enddate;

    /**
     * @var int
     */
    private $tpoptout;

    /**
     * @var int
     */
    private $transient;

    /**
     * @var int
     */
    private $linktype;

    /**
     * @return string
     */
    public function getSearchref()
    {
        return $this->searchref;
    }

    /**
     * @param string $searchref
     * @return CTOutputsearchhistory
     */
    public function withSearchref($searchref)
    {
        $new = clone $this;
        $new->searchref = $searchref;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchorgtype()
    {
        return $this->searchorgtype;
    }

    /**
     * @param string $searchorgtype
     * @return CTOutputsearchhistory
     */
    public function withSearchorgtype($searchorgtype)
    {
        $new = clone $this;
        $new->searchorgtype = $searchorgtype;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchorgname()
    {
        return $this->searchorgname;
    }

    /**
     * @param string $searchorgname
     * @return CTOutputsearchhistory
     */
    public function withSearchorgname($searchorgname)
    {
        $new = clone $this;
        $new->searchorgname = $searchorgname;

        return $new;
    }

    /**
     * @return string
     */
    public function getYourreference()
    {
        return $this->yourreference;
    }

    /**
     * @param string $yourreference
     * @return CTOutputsearchhistory
     */
    public function withYourreference($yourreference)
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchunitname()
    {
        return $this->searchunitname;
    }

    /**
     * @param string $searchunitname
     * @return CTOutputsearchhistory
     */
    public function withSearchunitname($searchunitname)
    {
        $new = clone $this;
        $new->searchunitname = $searchunitname;

        return $new;
    }

    /**
     * @return int
     */
    public function getOwnsearch()
    {
        return $this->ownsearch;
    }

    /**
     * @param int $ownsearch
     * @return CTOutputsearchhistory
     */
    public function withOwnsearch($ownsearch)
    {
        $new = clone $this;
        $new->ownsearch = $ownsearch;

        return $new;
    }

    /**
     * @return int
     */
    public function getSubsequentenquiry()
    {
        return $this->subsequentenquiry;
    }

    /**
     * @param int $subsequentenquiry
     * @return CTOutputsearchhistory
     */
    public function withSubsequentenquiry($subsequentenquiry)
    {
        $new = clone $this;
        $new->subsequentenquiry = $subsequentenquiry;

        return $new;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return CTOutputsearchhistory
     */
    public function withUsername($username)
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getSearchpurpose()
    {
        return $this->searchpurpose;
    }

    /**
     * @param string $searchpurpose
     * @return CTOutputsearchhistory
     */
    public function withSearchpurpose($searchpurpose)
    {
        $new = clone $this;
        $new->searchpurpose = $searchpurpose;

        return $new;
    }

    /**
     * @return string
     */
    public function getCredittype()
    {
        return $this->credittype;
    }

    /**
     * @param string $credittype
     * @return CTOutputsearchhistory
     */
    public function withCredittype($credittype)
    {
        $new = clone $this;
        $new->credittype = $credittype;

        return $new;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return CTOutputsearchhistory
     */
    public function withBalance($balance)
    {
        $new = clone $this;
        $new->balance = $balance;

        return $new;
    }

    /**
     * @return int
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param int $term
     * @return CTOutputsearchhistory
     */
    public function withTerm($term)
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return int
     */
    public function getJointapplication()
    {
        return $this->jointapplication;
    }

    /**
     * @param int $jointapplication
     * @return CTOutputsearchhistory
     */
    public function withJointapplication($jointapplication)
    {
        $new = clone $this;
        $new->jointapplication = $jointapplication;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSearchdate()
    {
        return $this->searchdate;
    }

    /**
     * @param \DateTimeInterface $searchdate
     * @return CTOutputsearchhistory
     */
    public function withSearchdate($searchdate)
    {
        $new = clone $this;
        $new->searchdate = $searchdate;

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
     * @return CTOutputsearchhistory
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
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param \DateTimeInterface $dob
     * @return CTOutputsearchhistory
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return CTOutputsearchhistory
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTimeInterface $startdate
     * @return CTOutputsearchhistory
     */
    public function withStartdate($startdate)
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param \DateTimeInterface $enddate
     * @return CTOutputsearchhistory
     */
    public function withEnddate($enddate)
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return int
     */
    public function getTpoptout()
    {
        return $this->tpoptout;
    }

    /**
     * @param int $tpoptout
     * @return CTOutputsearchhistory
     */
    public function withTpoptout($tpoptout)
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return int
     */
    public function getTransient()
    {
        return $this->transient;
    }

    /**
     * @param int $transient
     * @return CTOutputsearchhistory
     */
    public function withTransient($transient)
    {
        $new = clone $this;
        $new->transient = $transient;

        return $new;
    }

    /**
     * @return int
     */
    public function getLinktype()
    {
        return $this->linktype;
    }

    /**
     * @param int $linktype
     * @return CTOutputsearchhistory
     */
    public function withLinktype($linktype)
    {
        $new = clone $this;
        $new->linktype = $linktype;

        return $new;
    }


}

