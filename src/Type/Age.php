<?php

namespace PaymentAssist\Type;

class Age
{

    /**
     * @var int
     */
    private $age0_17;

    /**
     * @var int
     */
    private $age18_24;

    /**
     * @var int
     */
    private $age25_34;

    /**
     * @var int
     */
    private $age35_44;

    /**
     * @var int
     */
    private $age45_54;

    /**
     * @var int
     */
    private $age55_64;

    /**
     * @var int
     */
    private $age65_74;

    /**
     * @var int
     */
    private $age75pl;

    /**
     * @var float
     */
    private $agescore;

    /**
     * @var int
     */
    private $ageband;

    /**
     * @return int
     */
    public function getAge0_17()
    {
        return $this->age0_17;
    }

    /**
     * @param int $age0_17
     * @return Age
     */
    public function withAge0_17($age0_17)
    {
        $new = clone $this;
        $new->age0_17 = $age0_17;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge18_24()
    {
        return $this->age18_24;
    }

    /**
     * @param int $age18_24
     * @return Age
     */
    public function withAge18_24($age18_24)
    {
        $new = clone $this;
        $new->age18_24 = $age18_24;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge25_34()
    {
        return $this->age25_34;
    }

    /**
     * @param int $age25_34
     * @return Age
     */
    public function withAge25_34($age25_34)
    {
        $new = clone $this;
        $new->age25_34 = $age25_34;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge35_44()
    {
        return $this->age35_44;
    }

    /**
     * @param int $age35_44
     * @return Age
     */
    public function withAge35_44($age35_44)
    {
        $new = clone $this;
        $new->age35_44 = $age35_44;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge45_54()
    {
        return $this->age45_54;
    }

    /**
     * @param int $age45_54
     * @return Age
     */
    public function withAge45_54($age45_54)
    {
        $new = clone $this;
        $new->age45_54 = $age45_54;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge55_64()
    {
        return $this->age55_64;
    }

    /**
     * @param int $age55_64
     * @return Age
     */
    public function withAge55_64($age55_64)
    {
        $new = clone $this;
        $new->age55_64 = $age55_64;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge65_74()
    {
        return $this->age65_74;
    }

    /**
     * @param int $age65_74
     * @return Age
     */
    public function withAge65_74($age65_74)
    {
        $new = clone $this;
        $new->age65_74 = $age65_74;

        return $new;
    }

    /**
     * @return int
     */
    public function getAge75pl()
    {
        return $this->age75pl;
    }

    /**
     * @param int $age75pl
     * @return Age
     */
    public function withAge75pl($age75pl)
    {
        $new = clone $this;
        $new->age75pl = $age75pl;

        return $new;
    }

    /**
     * @return float
     */
    public function getAgescore()
    {
        return $this->agescore;
    }

    /**
     * @param float $agescore
     * @return Age
     */
    public function withAgescore($agescore)
    {
        $new = clone $this;
        $new->agescore = $agescore;

        return $new;
    }

    /**
     * @return int
     */
    public function getAgeband()
    {
        return $this->ageband;
    }

    /**
     * @param int $ageband
     * @return Age
     */
    public function withAgeband($ageband)
    {
        $new = clone $this;
        $new->ageband = $ageband;

        return $new;
    }


}

