<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006
{
    /**
     * CAMEO UK Code
     *
     * @var null | string
     */
    private ?string $cameouk = null;

    /**
     * CAMEO UK Group
     *
     * @var null | string
     */
    private ?string $cameoukg = null;

    /**
     * Income Category
     *
     * @var null | string
     */
    private ?string $cameoincome = null;

    /**
     * Income Group
     *
     * @var null | string
     */
    private ?string $cameoincg = null;

    /**
     * Investor
     *
     * @var null | string
     */
    private ?string $cameoinvestor = null;

    /**
     * Investor Group
     *
     * @var null | string
     */
    private ?string $cameoinvg = null;

    /**
     * Property
     *
     * @var null | string
     */
    private ?string $cameoproperty = null;

    /**
     * Finance
     *
     * @var null | string
     */
    private ?string $cameofinance = null;

    /**
     * Finance Group
     *
     * @var null | string
     */
    private ?string $cameofing = null;

    /**
     * Unemployment
     *
     * @var null | string
     */
    private ?string $cameounemploy = null;

    /**
     * Age
     *
     * @var null | \PaymentAssist\Type\Age
     */
    private ?\PaymentAssist\Type\Age $age = null;

    /**
     * Tenure
     *
     * @var null | \PaymentAssist\Type\Tenure
     */
    private ?\PaymentAssist\Type\Tenure $tenure = null;

    /**
     * Household Composition
     *
     * @var null | \PaymentAssist\Type\Hhcomp
     */
    private ?\PaymentAssist\Type\Hhcomp $hhcomp = null;

    /**
     * Economic Activity
     *
     * @var null | \PaymentAssist\Type\Economic
     */
    private ?\PaymentAssist\Type\Economic $economic = null;

    /**
     * Lifestage
     *
     * @var null | \PaymentAssist\Type\Lifestage
     */
    private ?\PaymentAssist\Type\Lifestage $lifestage = null;

    /**
     * Social Class
     *
     * @var null | \PaymentAssist\Type\Social
     */
    private ?\PaymentAssist\Type\Social $social = null;

    /**
     * Occupation
     *
     * @var null | \PaymentAssist\Type\Occupation
     */
    private ?\PaymentAssist\Type\Occupation $occupation = null;

    /**
     * Mortgage and House Size
     *
     * @var null | \PaymentAssist\Type\Mortgage
     */
    private ?\PaymentAssist\Type\Mortgage $mortgage = null;

    /**
     * Shareholding
     *
     * @var null | \PaymentAssist\Type\Sharehld
     */
    private ?\PaymentAssist\Type\Sharehld $sharehld = null;

    /**
     * Unemployment
     *
     * @var null | \PaymentAssist\Type\Unemployment
     */
    private ?\PaymentAssist\Type\Unemployment $unemployment = null;

    /**
     * Unemployment Rate
     *
     * @var null | \PaymentAssist\Type\Unemprate
     */
    private ?\PaymentAssist\Type\Unemprate $unemprate = null;

    /**
     * Property
     *
     * @var null | \PaymentAssist\Type\Property
     */
    private ?\PaymentAssist\Type\Property $property = null;

    /**
     * International
     *
     * @var null | \PaymentAssist\Type\International
     */
    private ?\PaymentAssist\Type\International $international = null;

    /**
     * @return null | string
     */
    public function getCameouk() : ?string
    {
        return $this->cameouk;
    }

    /**
     * @param null | string $cameouk
     * @return static
     */
    public function withCameouk(?string $cameouk) : static
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoukg() : ?string
    {
        return $this->cameoukg;
    }

    /**
     * @param null | string $cameoukg
     * @return static
     */
    public function withCameoukg(?string $cameoukg) : static
    {
        $new = clone $this;
        $new->cameoukg = $cameoukg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincome() : ?string
    {
        return $this->cameoincome;
    }

    /**
     * @param null | string $cameoincome
     * @return static
     */
    public function withCameoincome(?string $cameoincome) : static
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincg() : ?string
    {
        return $this->cameoincg;
    }

    /**
     * @param null | string $cameoincg
     * @return static
     */
    public function withCameoincg(?string $cameoincg) : static
    {
        $new = clone $this;
        $new->cameoincg = $cameoincg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvestor() : ?string
    {
        return $this->cameoinvestor;
    }

    /**
     * @param null | string $cameoinvestor
     * @return static
     */
    public function withCameoinvestor(?string $cameoinvestor) : static
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvg() : ?string
    {
        return $this->cameoinvg;
    }

    /**
     * @param null | string $cameoinvg
     * @return static
     */
    public function withCameoinvg(?string $cameoinvg) : static
    {
        $new = clone $this;
        $new->cameoinvg = $cameoinvg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoproperty() : ?string
    {
        return $this->cameoproperty;
    }

    /**
     * @param null | string $cameoproperty
     * @return static
     */
    public function withCameoproperty(?string $cameoproperty) : static
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofinance() : ?string
    {
        return $this->cameofinance;
    }

    /**
     * @param null | string $cameofinance
     * @return static
     */
    public function withCameofinance(?string $cameofinance) : static
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofing() : ?string
    {
        return $this->cameofing;
    }

    /**
     * @param null | string $cameofing
     * @return static
     */
    public function withCameofing(?string $cameofing) : static
    {
        $new = clone $this;
        $new->cameofing = $cameofing;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameounemploy() : ?string
    {
        return $this->cameounemploy;
    }

    /**
     * @param null | string $cameounemploy
     * @return static
     */
    public function withCameounemploy(?string $cameounemploy) : static
    {
        $new = clone $this;
        $new->cameounemploy = $cameounemploy;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Age
     */
    public function getAge() : ?\PaymentAssist\Type\Age
    {
        return $this->age;
    }

    /**
     * @param null | \PaymentAssist\Type\Age $age
     * @return static
     */
    public function withAge(?\PaymentAssist\Type\Age $age) : static
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Tenure
     */
    public function getTenure() : ?\PaymentAssist\Type\Tenure
    {
        return $this->tenure;
    }

    /**
     * @param null | \PaymentAssist\Type\Tenure $tenure
     * @return static
     */
    public function withTenure(?\PaymentAssist\Type\Tenure $tenure) : static
    {
        $new = clone $this;
        $new->tenure = $tenure;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Hhcomp
     */
    public function getHhcomp() : ?\PaymentAssist\Type\Hhcomp
    {
        return $this->hhcomp;
    }

    /**
     * @param null | \PaymentAssist\Type\Hhcomp $hhcomp
     * @return static
     */
    public function withHhcomp(?\PaymentAssist\Type\Hhcomp $hhcomp) : static
    {
        $new = clone $this;
        $new->hhcomp = $hhcomp;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Economic
     */
    public function getEconomic() : ?\PaymentAssist\Type\Economic
    {
        return $this->economic;
    }

    /**
     * @param null | \PaymentAssist\Type\Economic $economic
     * @return static
     */
    public function withEconomic(?\PaymentAssist\Type\Economic $economic) : static
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Lifestage
     */
    public function getLifestage() : ?\PaymentAssist\Type\Lifestage
    {
        return $this->lifestage;
    }

    /**
     * @param null | \PaymentAssist\Type\Lifestage $lifestage
     * @return static
     */
    public function withLifestage(?\PaymentAssist\Type\Lifestage $lifestage) : static
    {
        $new = clone $this;
        $new->lifestage = $lifestage;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Social
     */
    public function getSocial() : ?\PaymentAssist\Type\Social
    {
        return $this->social;
    }

    /**
     * @param null | \PaymentAssist\Type\Social $social
     * @return static
     */
    public function withSocial(?\PaymentAssist\Type\Social $social) : static
    {
        $new = clone $this;
        $new->social = $social;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Occupation
     */
    public function getOccupation() : ?\PaymentAssist\Type\Occupation
    {
        return $this->occupation;
    }

    /**
     * @param null | \PaymentAssist\Type\Occupation $occupation
     * @return static
     */
    public function withOccupation(?\PaymentAssist\Type\Occupation $occupation) : static
    {
        $new = clone $this;
        $new->occupation = $occupation;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Mortgage
     */
    public function getMortgage() : ?\PaymentAssist\Type\Mortgage
    {
        return $this->mortgage;
    }

    /**
     * @param null | \PaymentAssist\Type\Mortgage $mortgage
     * @return static
     */
    public function withMortgage(?\PaymentAssist\Type\Mortgage $mortgage) : static
    {
        $new = clone $this;
        $new->mortgage = $mortgage;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Sharehld
     */
    public function getSharehld() : ?\PaymentAssist\Type\Sharehld
    {
        return $this->sharehld;
    }

    /**
     * @param null | \PaymentAssist\Type\Sharehld $sharehld
     * @return static
     */
    public function withSharehld(?\PaymentAssist\Type\Sharehld $sharehld) : static
    {
        $new = clone $this;
        $new->sharehld = $sharehld;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Unemployment
     */
    public function getUnemployment() : ?\PaymentAssist\Type\Unemployment
    {
        return $this->unemployment;
    }

    /**
     * @param null | \PaymentAssist\Type\Unemployment $unemployment
     * @return static
     */
    public function withUnemployment(?\PaymentAssist\Type\Unemployment $unemployment) : static
    {
        $new = clone $this;
        $new->unemployment = $unemployment;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Unemprate
     */
    public function getUnemprate() : ?\PaymentAssist\Type\Unemprate
    {
        return $this->unemprate;
    }

    /**
     * @param null | \PaymentAssist\Type\Unemprate $unemprate
     * @return static
     */
    public function withUnemprate(?\PaymentAssist\Type\Unemprate $unemprate) : static
    {
        $new = clone $this;
        $new->unemprate = $unemprate;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Property
     */
    public function getProperty() : ?\PaymentAssist\Type\Property
    {
        return $this->property;
    }

    /**
     * @param null | \PaymentAssist\Type\Property $property
     * @return static
     */
    public function withProperty(?\PaymentAssist\Type\Property $property) : static
    {
        $new = clone $this;
        $new->property = $property;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\International
     */
    public function getInternational() : ?\PaymentAssist\Type\International
    {
        return $this->international;
    }

    /**
     * @param null | \PaymentAssist\Type\International $international
     * @return static
     */
    public function withInternational(?\PaymentAssist\Type\International $international) : static
    {
        $new = clone $this;
        $new->international = $international;

        return $new;
    }
}

