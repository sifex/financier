<?php


namespace Sifex\Financier\Interfaces;


interface PlanInterface
{
    /**
     * @return string
     */
    public function getPaymentGatewayPlanID() : string;

    /**
     * @param string $paymentGatewayPlanID
     * @return $this
     */
    public function setPaymentGatewayPlanID(string $paymentGatewayPlanID) : self;
}
