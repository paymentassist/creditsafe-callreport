<?php

namespace PaymentAssist\Type;

class CTDemographicstelephone
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $std;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $extension;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CTDemographicstelephone
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getStd()
    {
        return $this->std;
    }

    /**
     * @param string $std
     * @return CTDemographicstelephone
     */
    public function withStd($std)
    {
        $new = clone $this;
        $new->std = $std;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return CTDemographicstelephone
     */
    public function withNumber($number)
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     * @return CTDemographicstelephone
     */
    public function withExtension($extension)
    {
        $new = clone $this;
        $new->extension = $extension;

        return $new;
    }


}

