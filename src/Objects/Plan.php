<?php


namespace Sifex\Financier\Objects;


use Sifex\Financier\Interfaces\PlanInterface;

class Plan extends BaseObject implements PlanInterface
{

    /**
     * @inheritDoc
     */
    public function getPaymentGatewayPlanID(): string
    {
        // TODO: Implement getPaymentGatewayPlanID() method.
    }

    /**
     * @inheritDoc
     */
    public function setPaymentGatewayPlanID(string $paymentGatewayPlanID): PlanInterface
    {
        // TODO: Implement setPaymentGatewayPlanID() method.
    }
}
