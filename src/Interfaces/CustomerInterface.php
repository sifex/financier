<?php


namespace Sifex\Financier\Interfaces;

/**
 * Interface CustomerInterface
 * @package Sifex\Financier\Interfaces
 */
interface CustomerInterface
{
    /**
     * @return string
     */
    public function getCustomerPaymentGatewayID() : string;

    /**
     * @param string $customerPaymentGatewayID
     * @return $this
     */
    public function setCustomerPaymentGatewayID(string $customerPaymentGatewayID) : self;
}
