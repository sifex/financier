<?php


namespace Sifex\Financier\Objects;


use Sifex\Financier\Interfaces\CustomerInterface;

class Customer extends BaseObject implements CustomerInterface
{

    /**
     * @inheritDoc
     */
    public function getCustomerPaymentGatewayID(): string
    {
        // TODO: Implement getCustomerPaymentGatewayID() method.
    }

    /**
     * @inheritDoc
     */
    public function setCustomerPaymentGatewayID(string $customerPaymentGatewayID): CustomerInterface
    {
        // TODO: Implement setCustomerPaymentGatewayID() method.
    }
}
