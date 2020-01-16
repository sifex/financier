<?php


namespace Sifex\Financier\Objects;


use Sifex\Financier\Interfaces\AccountInterface;

class Account extends BaseObject implements AccountInterface
{

    /**
     * @inheritDoc
     */
    public function getPaymentGatewayAccountID(): string
    {
        // TODO: Implement getPaymentGatewayAccountID() method.
    }

    /**
     * @inheritDoc
     */
    public function setPaymentGatewayAccountID(string $paymentGatewayAccountID): AccountInterface
    {
        // TODO: Implement setPaymentGatewayAccountID() method.
    }
}
