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
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Age
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Age $age = null;

    /**
     * Tenure
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Tenure
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Tenure $tenure = null;

    /**
     * Household Composition
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Hhcomp
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Hhcomp $hhcomp = null;

    /**
     * Economic Activity
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Economic
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Economic $economic = null;

    /**
     * Lifestage
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Lifestage
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Lifestage $lifestage = null;

    /**
     * Social Class
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Social
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Social $social = null;

    /**
     * Occupation
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Occupation
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Occupation $occupation = null;

    /**
     * Mortgage and House Size
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Mortgage
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Mortgage $mortgage = null;

    /**
     * Shareholding
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Sharehld
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Sharehld $sharehld = null;

    /**
     * Unemployment
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Unemployment
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Unemployment $unemployment = null;

    /**
     * Unemployment Rate
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Unemprate
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Unemprate $unemprate = null;

    /**
     * Property
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006Property
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006Property $property = null;

    /**
     * International
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographics2006International
     */
    private ?\PaymentAssist\Type\CTOutputdemographics2006International $international = null;

    /**
     * @return null | string
     */
    public function getCameouk(): ?string
    {
        return $this->cameouk;
    }

    /**
     * @param null | string $cameouk
     * @return static
     */
    public function withCameouk(?string $cameouk): static
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoukg(): ?string
    {
        return $this->cameoukg;
    }

    /**
     * @param null | string $cameoukg
     * @return static
     */
    public function withCameoukg(?string $cameoukg): static
    {
        $new = clone $this;
        $new->cameoukg = $cameoukg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincome(): ?string
    {
        return $this->cameoincome;
    }

    /**
     * @param null | string $cameoincome
     * @return static
     */
    public function withCameoincome(?string $cameoincome): static
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincg(): ?string
    {
        return $this->cameoincg;
    }

    /**
     * @param null | string $cameoincg
     * @return static
     */
    public function withCameoincg(?string $cameoincg): static
    {
        $new = clone $this;
        $new->cameoincg = $cameoincg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvestor(): ?string
    {
        return $this->cameoinvestor;
    }

    /**
     * @param null | string $cameoinvestor
     * @return static
     */
    public function withCameoinvestor(?string $cameoinvestor): static
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvg(): ?string
    {
        return $this->cameoinvg;
    }

    /**
     * @param null | string $cameoinvg
     * @return static
     */
    public function withCameoinvg(?string $cameoinvg): static
    {
        $new = clone $this;
        $new->cameoinvg = $cameoinvg;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoproperty(): ?string
    {
        return $this->cameoproperty;
    }

    /**
     * @param null | string $cameoproperty
     * @return static
     */
    public function withCameoproperty(?string $cameoproperty): static
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofinance(): ?string
    {
        return $this->cameofinance;
    }

    /**
     * @param null | string $cameofinance
     * @return static
     */
    public function withCameofinance(?string $cameofinance): static
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofing(): ?string
    {
        return $this->cameofing;
    }

    /**
     * @param null | string $cameofing
     * @return static
     */
    public function withCameofing(?string $cameofing): static
    {
        $new = clone $this;
        $new->cameofing = $cameofing;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameounemploy(): ?string
    {
        return $this->cameounemploy;
    }

    /**
     * @param null | string $cameounemploy
     * @return static
     */
    public function withCameounemploy(?string $cameounemploy): static
    {
        $new = clone $this;
        $new->cameounemploy = $cameounemploy;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Age
     */
    public function getAge(): ?\PaymentAssist\Type\CTOutputdemographics2006Age
    {
        return $this->age;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Age $age
     * @return static
     */
    public function withAge(?\PaymentAssist\Type\CTOutputdemographics2006Age $age): static
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Tenure
     */
    public function getTenure(): ?\PaymentAssist\Type\CTOutputdemographics2006Tenure
    {
        return $this->tenure;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Tenure $tenure
     * @return static
     */
    public function withTenure(?\PaymentAssist\Type\CTOutputdemographics2006Tenure $tenure): static
    {
        $new = clone $this;
        $new->tenure = $tenure;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Hhcomp
     */
    public function getHhcomp(): ?\PaymentAssist\Type\CTOutputdemographics2006Hhcomp
    {
        return $this->hhcomp;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Hhcomp $hhcomp
     * @return static
     */
    public function withHhcomp(?\PaymentAssist\Type\CTOutputdemographics2006Hhcomp $hhcomp): static
    {
        $new = clone $this;
        $new->hhcomp = $hhcomp;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Economic
     */
    public function getEconomic(): ?\PaymentAssist\Type\CTOutputdemographics2006Economic
    {
        return $this->economic;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Economic $economic
     * @return static
     */
    public function withEconomic(?\PaymentAssist\Type\CTOutputdemographics2006Economic $economic): static
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Lifestage
     */
    public function getLifestage(): ?\PaymentAssist\Type\CTOutputdemographics2006Lifestage
    {
        return $this->lifestage;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Lifestage $lifestage
     * @return static
     */
    public function withLifestage(?\PaymentAssist\Type\CTOutputdemographics2006Lifestage $lifestage): static
    {
        $new = clone $this;
        $new->lifestage = $lifestage;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Social
     */
    public function getSocial(): ?\PaymentAssist\Type\CTOutputdemographics2006Social
    {
        return $this->social;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Social $social
     * @return static
     */
    public function withSocial(?\PaymentAssist\Type\CTOutputdemographics2006Social $social): static
    {
        $new = clone $this;
        $new->social = $social;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Occupation
     */
    public function getOccupation(): ?\PaymentAssist\Type\CTOutputdemographics2006Occupation
    {
        return $this->occupation;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Occupation $occupation
     * @return static
     */
    public function withOccupation(?\PaymentAssist\Type\CTOutputdemographics2006Occupation $occupation): static
    {
        $new = clone $this;
        $new->occupation = $occupation;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Mortgage
     */
    public function getMortgage(): ?\PaymentAssist\Type\CTOutputdemographics2006Mortgage
    {
        return $this->mortgage;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Mortgage $mortgage
     * @return static
     */
    public function withMortgage(?\PaymentAssist\Type\CTOutputdemographics2006Mortgage $mortgage): static
    {
        $new = clone $this;
        $new->mortgage = $mortgage;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Sharehld
     */
    public function getSharehld(): ?\PaymentAssist\Type\CTOutputdemographics2006Sharehld
    {
        return $this->sharehld;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Sharehld $sharehld
     * @return static
     */
    public function withSharehld(?\PaymentAssist\Type\CTOutputdemographics2006Sharehld $sharehld): static
    {
        $new = clone $this;
        $new->sharehld = $sharehld;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Unemployment
     */
    public function getUnemployment(): ?\PaymentAssist\Type\CTOutputdemographics2006Unemployment
    {
        return $this->unemployment;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Unemployment $unemployment
     * @return static
     */
    public function withUnemployment(?\PaymentAssist\Type\CTOutputdemographics2006Unemployment $unemployment): static
    {
        $new = clone $this;
        $new->unemployment = $unemployment;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Unemprate
     */
    public function getUnemprate(): ?\PaymentAssist\Type\CTOutputdemographics2006Unemprate
    {
        return $this->unemprate;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Unemprate $unemprate
     * @return static
     */
    public function withUnemprate(?\PaymentAssist\Type\CTOutputdemographics2006Unemprate $unemprate): static
    {
        $new = clone $this;
        $new->unemprate = $unemprate;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006Property
     */
    public function getProperty(): ?\PaymentAssist\Type\CTOutputdemographics2006Property
    {
        return $this->property;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006Property $property
     * @return static
     */
    public function withProperty(?\PaymentAssist\Type\CTOutputdemographics2006Property $property): static
    {
        $new = clone $this;
        $new->property = $property;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographics2006International
     */
    public function getInternational(): ?\PaymentAssist\Type\CTOutputdemographics2006International
    {
        return $this->international;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographics2006International $international
     * @return static
     */
    public function withInternational(?\PaymentAssist\Type\CTOutputdemographics2006International $international): static
    {
        $new = clone $this;
        $new->international = $international;

        return $new;
    }
}

