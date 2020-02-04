<?php

namespace PaymentAssist\Type;

class Namematch
{

    /**
     * @var int
     */
    private $residenceid;

    /**
     * @var int
     */
    private $dnaid;

    /**
     * @var \DateTimeInterface
     */
    private $dob;

    /**
     * @var int
     */
    private $selected;

    /**
     * @return int
     */
    public function getResidenceid()
    {
        return $this->residenceid;
    }

    /**
     * @param int $residenceid
     * @return Namematch
     */
    public function withResidenceid($residenceid)
    {
        $new = clone $this;
        $new->residenceid = $residenceid;

        return $new;
    }

    /**
     * @return int
     */
    public function getDnaid()
    {
        return $this->dnaid;
    }

    /**
     * @param int $dnaid
     * @return Namematch
     */
    public function withDnaid($dnaid)
    {
        $new = clone $this;
        $new->dnaid = $dnaid;

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
     * @return Namematch
     */
    public function withDob($dob)
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return int
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param int $selected
     * @return Namematch
     */
    public function withSelected($selected)
    {
        $new = clone $this;
        $new->selected = $selected;

        return $new;
    }


}

