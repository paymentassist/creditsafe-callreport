<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CTTestResponse implements ResultInterface
{

    /**
     * @var \PaymentAssist\Type\CTTestResult
     */
    private $TestResult;

    /**
     * @return \PaymentAssist\Type\CTTestResult
     */
    public function getTestResult()
    {
        return $this->TestResult;
    }

    /**
     * @param \PaymentAssist\Type\CTTestResult $TestResult
     * @return CTTestResponse
     */
    public function withTestResult($TestResult)
    {
        $new = clone $this;
        $new->TestResult = $TestResult;

        return $new;
    }


}

