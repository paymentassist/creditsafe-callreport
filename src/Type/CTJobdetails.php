<?php

namespace PaymentAssist\Type;

class CTJobdetails
{

    /**
     * @var string
     */
    private $searchid;

    /**
     * @var string
     */
    private $cast;

    /**
     * @var int
     */
    private $pstv;

    /**
     * @var int
     */
    private $ls;

    /**
     * @var \DateTimeInterface
     */
    private $searchdate;

    /**
     * @return string
     */
    public function getSearchid()
    {
        return $this->searchid;
    }

    /**
     * @param string $searchid
     * @return CTJobdetails
     */
    public function withSearchid($searchid)
    {
        $new = clone $this;
        $new->searchid = $searchid;

        return $new;
    }

    /**
     * @return string
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * @param string $cast
     * @return CTJobdetails
     */
    public function withCast($cast)
    {
        $new = clone $this;
        $new->cast = $cast;

        return $new;
    }

    /**
     * @return int
     */
    public function getPstv()
    {
        return $this->pstv;
    }

    /**
     * @param int $pstv
     * @return CTJobdetails
     */
    public function withPstv($pstv)
    {
        $new = clone $this;
        $new->pstv = $pstv;

        return $new;
    }

    /**
     * @return int
     */
    public function getLs()
    {
        return $this->ls;
    }

    /**
     * @param int $ls
     * @return CTJobdetails
     */
    public function withLs($ls)
    {
        $new = clone $this;
        $new->ls = $ls;

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
     * @return CTJobdetails
     */
    public function withSearchdate($searchdate)
    {
        $new = clone $this;
        $new->searchdate = $searchdate;

        return $new;
    }


}

