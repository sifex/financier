<?php

namespace Sifex\Financier\PaymentGateway;

use Sifex\Financier\Collection;
use Sifex\Financier\Interfaces\AccountInterface;
use Sifex\Financier\Interfaces\CustomerInterface;
use Sifex\Financier\Interfaces\PlanInterface;
use Sifex\Financier\Objects\Bank;
use Sifex\Financier\Objects\PaymentMethod;
use Sifex\Financier\Objects\Verification;
use Stripe\Account;
use Stripe\Balance;
use Stripe\Customer;
use Stripe\Error\Api;
use Stripe\Invoice;
use Stripe\Plan;
use Stripe\Stripe;
use Stripe\Subscription;
use Stripe\Token;

class StripePaymentGateway implements PaymentGateway
{
    /**
     * @var string
     */
    private $apiToken;

    /**
     * @var string
     */
    private $organisationAccountID;

    /**
     * @var string
     */
    private $version = '2019-05-16';

    /**
     * StripePaymentGateway constructor.
     *
     * @param string $apiToken
     * @param string $organisationAccountID
     */
    public function __construct(string $apiToken, string $organisationAccountID = '')
    {
        $this->apiToken = $apiToken;
        $this->organisationAccountID = $organisationAccountID;
        Stripe::setApiKey($this->apiToken);
        Stripe::setApiVersion($this->version);
    }

    /**
     * @param string $paymentGatewayAccountID
     * @return StripePaymentGateway
     */
    public function setPaymentGatewayAccountID(string $paymentGatewayAccountID): PaymentGateway
    {
        $this->organisationAccountID = $paymentGatewayAccountID;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function createCustomer(CustomerInterface $customer): \Sifex\Financier\Objects\Customer
    {
        // TODO: Implement createCustomer() method.
    }

    /**
     * @inheritDoc
     */
    public function getCustomer(CustomerInterface $customer): \Sifex\Financier\Objects\Customer
    {
        // TODO: Implement getCustomer() method.
    }

    /**
     * @inheritDoc
     */
    public function getAllCustomers(array $options = []): Collection
    {
        // TODO: Implement getAllCustomers() method.
    }

    /**
     * @inheritDoc
     */
    public function updateCustomer(CustomerInterface $customer): \Sifex\Financier\Objects\Customer
    {
        // TODO: Implement updateCustomer() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteCustomer(CustomerInterface $customer): \Sifex\Financier\Objects\Customer
    {
        // TODO: Implement deleteCustomer() method.
    }

    /**
     * @inheritDoc
     */
    public function createPaymentGatewayAccount(AccountInterface $account): \Sifex\Financier\Objects\Account
    {
        // TODO: Implement createPaymentGatewayAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function getPaymentGatewayAccount(AccountInterface $account): \Sifex\Financier\Objects\Account
    {
        // TODO: Implement getPaymentGatewayAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function updatePaymentGatewayAccount(AccountInterface $account): \Sifex\Financier\Objects\Account
    {
        // TODO: Implement updatePaymentGatewayAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function deletePaymentGatewayAccount(AccountInterface $account): \Sifex\Financier\Objects\Account
    {
        // TODO: Implement deletePaymentGatewayAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function createMembershipPlan(PlanInterface $plan): \Sifex\Financier\Objects\Plan
    {
        // TODO: Implement createMembershipPlan() method.
    }

    /**
     * @inheritDoc
     */
    public function getMembershipPlan(PlanInterface $plan): \Sifex\Financier\Objects\Plan
    {
        // TODO: Implement getMembershipPlan() method.
    }

    /**
     * @inheritDoc
     */
    public function updateMembershipPlan(PlanInterface $plan): \Sifex\Financier\Objects\Plan
    {
        // TODO: Implement updateMembershipPlan() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteMembershipPlan(PlanInterface $plan): \Sifex\Financier\Objects\Plan
    {
        // TODO: Implement deleteMembershipPlan() method.
    }

    /**
     * @inheritDoc
     */
    public function addCustomerPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod): PaymentMethod
    {
        // TODO: Implement addCustomerPaymentMethod() method.
    }

    /**
     * @inheritDoc
     */
    public function getCustomerPaymentMethods(CustomerInterface $customer): Collection
    {
        // TODO: Implement getCustomerPaymentMethods() method.
    }

    /**
     * @inheritDoc
     */
    public function removeCustomerPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod): PaymentMethod
    {
        // TODO: Implement removeCustomerPaymentMethod() method.
    }

    /**
     * @inheritDoc
     */
    public function setCustomerDefaultPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod): PaymentMethod
    {
        // TODO: Implement setCustomerDefaultPaymentMethod() method.
    }

    /**
     * @inheritDoc
     */
    public function getSubscription(\Sifex\Financier\Objects\Subscription $subscription): \Sifex\Financier\Objects\Subscription
    {
        // TODO: Implement getSubscription() method.
    }

    /**
     * @inheritDoc
     */
    public function getCustomerSubscriptions(CustomerInterface $customer): \Sifex\Financier\Objects\Subscription
    {
        // TODO: Implement getCustomerSubscriptions() method.
    }

    /**
     * @inheritDoc
     */
    public function createSubscription(CustomerInterface $customer, \Sifex\Financier\Objects\Plan $plan): \Sifex\Financier\Objects\Subscription
    {
        // TODO: Implement createSubscription() method.
    }

    /**
     * @inheritDoc
     */
    public function stopSubscription(\Sifex\Financier\Objects\Subscription $subscription, bool $cancelAtPeriodEnd = true): \Sifex\Financier\Objects\Subscription
    {
        // TODO: Implement stopSubscription() method.
    }

    /**
     * @inheritDoc
     */
    public function getAllBankAccounts(): Collection
    {
        // TODO: Implement getAllBankAccounts() method.
    }

    /**
     * @inheritDoc
     */
    public function getBankAccount(AccountInterface $account, Bank $bank): Bank
    {
        // TODO: Implement getBankAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function addBankAccount(AccountInterface $account, string $token): Bank
    {
        // TODO: Implement addBankAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function removeBankAccount(AccountInterface $account, string $bankAccountID): Bank
    {
        // TODO: Implement removeBankAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function setDefaultBankAccount(AccountInterface $account, string $bankAccountID, bool $defaultForCurrency = true): Collection
    {
        // TODO: Implement setDefaultBankAccount() method.
    }

    /**
     * @inheritDoc
     */
    public function getVerificationInformation(AccountInterface $account): Collection
    {
        // TODO: Implement getVerificationInformation() method.
    }

    /**
     * @inheritDoc
     */
    public function saveVerificationInformation(AccountInterface $account, Verification $verificationData): Collection
    {
        // TODO: Implement saveVerificationInformation() method.
    }

    /**
     * @inheritDoc
     */
    public function getAccountBalance(AccountInterface $account): Collection
    {
        // TODO: Implement getAccountBalance() method.
    }

    /**
     * @inheritDoc
     */
    public function getAllInvoices(CustomerInterface $customer): Collection
    {
        // TODO: Implement getAllInvoices() method.
    }

    /**
     * @inheritDoc
     */
    public function getInvoice(\Sifex\Financier\Objects\Invoice $invoice): Collection
    {
        // TODO: Implement getInvoice() method.
    }
}
