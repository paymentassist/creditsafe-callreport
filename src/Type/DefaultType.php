<?php

namespace PaymentAssist\Type;

class DefaultType
{

    /**
     * @var \DateTimeInterface
     */
    private $defdate;

    /**
     * @var int
     */
    private $origdefbal;

    /**
     * @var int
     */
    private $termbal;

    /**
     * @var \DateTimeInterface
     */
    private $defsatdate;

    /**
     * @var \DateTimeInterface
     */
    private $repodate;

    /**
     * @return \DateTimeInterface
     */
    public function getDefdate()
    {
        return $this->defdate;
    }

    /**
     * @param \DateTimeInterface $defdate
     * @return DefaultType
     */
    public function withDefdate($defdate)
    {
        $new = clone $this;
        $new->defdate = $defdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrigdefbal()
    {
        return $this->origdefbal;
    }

    /**
     * @param int $origdefbal
     * @return DefaultType
     */
    public function withOrigdefbal($origdefbal)
    {
        $new = clone $this;
        $new->origdefbal = $origdefbal;

        return $new;
    }

    /**
     * @return int
     */
    public function getTermbal()
    {
        return $this->termbal;
    }

    /**
     * @param int $termbal
     * @return DefaultType
     */
    public function withTermbal($termbal)
    {
        $new = clone $this;
        $new->termbal = $termbal;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDefsatdate()
    {
        return $this->defsatdate;
    }

    /**
     * @param \DateTimeInterface $defsatdate
     * @return DefaultType
     */
    public function withDefsatdate($defsatdate)
    {
        $new = clone $this;
        $new->defsatdate = $defsatdate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRepodate()
    {
        return $this->repodate;
    }

    /**
     * @param \DateTimeInterface $repodate
     * @return DefaultType
     */
    public function withRepodate($repodate)
    {
        $new = clone $this;
        $new->repodate = $repodate;

        return $new;
    }


}

