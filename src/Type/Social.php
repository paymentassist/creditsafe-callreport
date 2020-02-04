<?php

namespace PaymentAssist\Type;

class Social
{

    /**
     * @var float
     */
    private $millhhld;

    /**
     * @var float
     */
    private $dirhhld;

    /**
     * @var float
     */
    private $socscore;

    /**
     * @var int
     */
    private $socband;

    /**
     * @return float
     */
    public function getMillhhld()
    {
        return $this->millhhld;
    }

    /**
     * @param float $millhhld
     * @return Social
     */
    public function withMillhhld($millhhld)
    {
        $new = clone $this;
        $new->millhhld = $millhhld;

        return $new;
    }

    /**
     * @return float
     */
    public function getDirhhld()
    {
        return $this->dirhhld;
    }

    /**
     * @param float $dirhhld
     * @return Social
     */
    public function withDirhhld($dirhhld)
    {
        $new = clone $this;
        $new->dirhhld = $dirhhld;

        return $new;
    }

    /**
     * @return float
     */
    public function getSocscore()
    {
        return $this->socscore;
    }

    /**
     * @param float $socscore
     * @return Social
     */
    public function withSocscore($socscore)
    {
        $new = clone $this;
        $new->socscore = $socscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getSocband()
    {
        return $this->socband;
    }

    /**
     * @param int $socband
     * @return Social
     */
    public function withSocband($socband)
    {
        $new = clone $this;
        $new->socband = $socband;

        return $new;
    }


}

