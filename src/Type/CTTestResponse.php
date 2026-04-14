<?php

namespace PaymentAssist\Type;

class CTTestResponse
{
    /**
     * Response type for Lookup Data Web Method
     *
     * @var null | \PaymentAssist\Type\CTTestResult
     */
    private ?\PaymentAssist\Type\CTTestResult $TestResult = null;

    /**
     * @return null | \PaymentAssist\Type\CTTestResult
     */
    public function getTestResult(): ?\PaymentAssist\Type\CTTestResult
    {
        return $this->TestResult;
    }

    /**
     * @param null | \PaymentAssist\Type\CTTestResult $TestResult
     * @return static
     */
    public function withTestResult(?\PaymentAssist\Type\CTTestResult $TestResult): static
    {
        $new = clone $this;
        $new->TestResult = $TestResult;

        return $new;
    }
}

