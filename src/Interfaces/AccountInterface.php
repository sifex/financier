<?php


namespace Sifex\Financier\Interfaces;


interface AccountInterface
{
    /**
     * @return string
     */
    public function getPaymentGatewayAccountID() : string;

    /**
     * @param string $paymentGatewayAccountID
     * @return $this
     */
    public function setPaymentGatewayAccountID(string $paymentGatewayAccountID) : self;
}
