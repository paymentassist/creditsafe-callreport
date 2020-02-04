<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006
{

    /**
     * @var string
     */
    private $cameouk;

    /**
     * @var string
     */
    private $cameoukg;

    /**
     * @var string
     */
    private $cameoincome;

    /**
     * @var string
     */
    private $cameoincg;

    /**
     * @var string
     */
    private $cameoinvestor;

    /**
     * @var string
     */
    private $cameoinvg;

    /**
     * @var string
     */
    private $cameoproperty;

    /**
     * @var string
     */
    private $cameofinance;

    /**
     * @var string
     */
    private $cameofing;

    /**
     * @var string
     */
    private $cameounemploy;

    /**
     * @var \PaymentAssist\Type\Age
     */
    private $age;

    /**
     * @var \PaymentAssist\Type\Tenure
     */
    private $tenure;

    /**
     * @var \PaymentAssist\Type\Hhcomp
     */
    private $hhcomp;

    /**
     * @var \PaymentAssist\Type\Economic
     */
    private $economic;

    /**
     * @var \PaymentAssist\Type\Lifestage
     */
    private $lifestage;

    /**
     * @var \PaymentAssist\Type\Social
     */
    private $social;

    /**
     * @var \PaymentAssist\Type\Occupation
     */
    private $occupation;

    /**
     * @var \PaymentAssist\Type\Mortgage
     */
    private $mortgage;

    /**
     * @var \PaymentAssist\Type\Sharehld
     */
    private $sharehld;

    /**
     * @var \PaymentAssist\Type\Unemployment
     */
    private $unemployment;

    /**
     * @var \PaymentAssist\Type\Unemprate
     */
    private $unemprate;

    /**
     * @var \PaymentAssist\Type\Property
     */
    private $property;

    /**
     * @var \PaymentAssist\Type\International
     */
    private $international;

    /**
     * @return string
     */
    public function getCameouk()
    {
        return $this->cameouk;
    }

    /**
     * @param string $cameouk
     * @return CTOutputdemographics2006
     */
    public function withCameouk($cameouk)
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoukg()
    {
        return $this->cameoukg;
    }

    /**
     * @param string $cameoukg
     * @return CTOutputdemographics2006
     */
    public function withCameoukg($cameoukg)
    {
        $new = clone $this;
        $new->cameoukg = $cameoukg;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoincome()
    {
        return $this->cameoincome;
    }

    /**
     * @param string $cameoincome
     * @return CTOutputdemographics2006
     */
    public function withCameoincome($cameoincome)
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoincg()
    {
        return $this->cameoincg;
    }

    /**
     * @param string $cameoincg
     * @return CTOutputdemographics2006
     */
    public function withCameoincg($cameoincg)
    {
        $new = clone $this;
        $new->cameoincg = $cameoincg;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoinvestor()
    {
        return $this->cameoinvestor;
    }

    /**
     * @param string $cameoinvestor
     * @return CTOutputdemographics2006
     */
    public function withCameoinvestor($cameoinvestor)
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoinvg()
    {
        return $this->cameoinvg;
    }

    /**
     * @param string $cameoinvg
     * @return CTOutputdemographics2006
     */
    public function withCameoinvg($cameoinvg)
    {
        $new = clone $this;
        $new->cameoinvg = $cameoinvg;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoproperty()
    {
        return $this->cameoproperty;
    }

    /**
     * @param string $cameoproperty
     * @return CTOutputdemographics2006
     */
    public function withCameoproperty($cameoproperty)
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameofinance()
    {
        return $this->cameofinance;
    }

    /**
     * @param string $cameofinance
     * @return CTOutputdemographics2006
     */
    public function withCameofinance($cameofinance)
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameofing()
    {
        return $this->cameofing;
    }

    /**
     * @param string $cameofing
     * @return CTOutputdemographics2006
     */
    public function withCameofing($cameofing)
    {
        $new = clone $this;
        $new->cameofing = $cameofing;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameounemploy()
    {
        return $this->cameounemploy;
    }

    /**
     * @param string $cameounemploy
     * @return CTOutputdemographics2006
     */
    public function withCameounemploy($cameounemploy)
    {
        $new = clone $this;
        $new->cameounemploy = $cameounemploy;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param \PaymentAssist\Type\Age $age
     * @return CTOutputdemographics2006
     */
    public function withAge($age)
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Tenure
     */
    public function getTenure()
    {
        return $this->tenure;
    }

    /**
     * @param \PaymentAssist\Type\Tenure $tenure
     * @return CTOutputdemographics2006
     */
    public function withTenure($tenure)
    {
        $new = clone $this;
        $new->tenure = $tenure;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Hhcomp
     */
    public function getHhcomp()
    {
        return $this->hhcomp;
    }

    /**
     * @param \PaymentAssist\Type\Hhcomp $hhcomp
     * @return CTOutputdemographics2006
     */
    public function withHhcomp($hhcomp)
    {
        $new = clone $this;
        $new->hhcomp = $hhcomp;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Economic
     */
    public function getEconomic()
    {
        return $this->economic;
    }

    /**
     * @param \PaymentAssist\Type\Economic $economic
     * @return CTOutputdemographics2006
     */
    public function withEconomic($economic)
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Lifestage
     */
    public function getLifestage()
    {
        return $this->lifestage;
    }

    /**
     * @param \PaymentAssist\Type\Lifestage $lifestage
     * @return CTOutputdemographics2006
     */
    public function withLifestage($lifestage)
    {
        $new = clone $this;
        $new->lifestage = $lifestage;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Social
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * @param \PaymentAssist\Type\Social $social
     * @return CTOutputdemographics2006
     */
    public function withSocial($social)
    {
        $new = clone $this;
        $new->social = $social;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Occupation
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param \PaymentAssist\Type\Occupation $occupation
     * @return CTOutputdemographics2006
     */
    public function withOccupation($occupation)
    {
        $new = clone $this;
        $new->occupation = $occupation;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Mortgage
     */
    public function getMortgage()
    {
        return $this->mortgage;
    }

    /**
     * @param \PaymentAssist\Type\Mortgage $mortgage
     * @return CTOutputdemographics2006
     */
    public function withMortgage($mortgage)
    {
        $new = clone $this;
        $new->mortgage = $mortgage;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Sharehld
     */
    public function getSharehld()
    {
        return $this->sharehld;
    }

    /**
     * @param \PaymentAssist\Type\Sharehld $sharehld
     * @return CTOutputdemographics2006
     */
    public function withSharehld($sharehld)
    {
        $new = clone $this;
        $new->sharehld = $sharehld;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Unemployment
     */
    public function getUnemployment()
    {
        return $this->unemployment;
    }

    /**
     * @param \PaymentAssist\Type\Unemployment $unemployment
     * @return CTOutputdemographics2006
     */
    public function withUnemployment($unemployment)
    {
        $new = clone $this;
        $new->unemployment = $unemployment;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Unemprate
     */
    public function getUnemprate()
    {
        return $this->unemprate;
    }

    /**
     * @param \PaymentAssist\Type\Unemprate $unemprate
     * @return CTOutputdemographics2006
     */
    public function withUnemprate($unemprate)
    {
        $new = clone $this;
        $new->unemprate = $unemprate;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Property
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param \PaymentAssist\Type\Property $property
     * @return CTOutputdemographics2006
     */
    public function withProperty($property)
    {
        $new = clone $this;
        $new->property = $property;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\International
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * @param \PaymentAssist\Type\International $international
     * @return CTOutputdemographics2006
     */
    public function withInternational($international)
    {
        $new = clone $this;
        $new->international = $international;

        return $new;
    }


}

