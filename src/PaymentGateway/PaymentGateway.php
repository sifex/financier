<?php

namespace Sifex\Financier\PaymentGateway;

use Sifex\Financier\Collection;
use Sifex\Financier\Interfaces\AccountInterface;
use Sifex\Financier\Interfaces\CustomerInterface;
use Sifex\Financier\Interfaces\PlanInterface;
use Sifex\Financier\Objects\Account;
use Sifex\Financier\Objects\Bank;
use Sifex\Financier\Objects\Customer;
use Sifex\Financier\Objects\Invoice;
use Sifex\Financier\Objects\PaymentMethod;
use Sifex\Financier\Objects\Plan;
use Sifex\Financier\Objects\Subscription;
use Sifex\Financier\Objects\Verification;


interface PaymentGateway
{
    /**
     * PaymentGateway constructor.
     * @param string $apiToken
     */
    public function __construct(string $apiToken);

    /**
     * @param string $paymentGatewayAccountID
     * @return PaymentGateway
     */
    public function setPaymentGatewayAccountID(string $paymentGatewayAccountID) : self;

    /** ----------------- Customer ----------------- */

    /**
     * Get Customer.
     *
     * @param CustomerInterface $customer
     * @return Customer
     */
    public function createCustomer(CustomerInterface $customer) : Customer;

    /**
     * @param CustomerInterface $customer
     * @return Customer
     */
    public function getCustomer(CustomerInterface $customer) : Customer;

    /**
     * @param array $options
     * @return Collection
     */
    public function getAllCustomers(array $options = []) : Collection;

    /**
     * Update Customer.
     *
     * @param CustomerInterface $customer
     * @return Customer
     */
    public function updateCustomer(CustomerInterface $customer) : Customer;

    /**
     * Delete Customer.
     *
     * @param CustomerInterface $customer
     * @return Customer
     */
    public function deleteCustomer(CustomerInterface $customer) : Customer;

    /** ----------------- Account ----------------- */

    /**
     * Create Payment Gateway Connect Account.
     *
     * @param AccountInterface $account
     * @return Account
     */
    public function createPaymentGatewayAccount(AccountInterface $account) : Account;

    /**
     * Get Payment Gateway Connect Account.
     *
     * @param AccountInterface $account
     * @return Account
     */
    public function getPaymentGatewayAccount(AccountInterface $account) : Account;

    /**
     * Update Payment Gateway Connect Account.
     *
     * @param AccountInterface $account
     * @return Account
     */
    public function updatePaymentGatewayAccount(AccountInterface $account) : Account;

    /**
     * Delete Payment Gateway Connect Account.
     *
     * @param AccountInterface $account
     * @return Account
     */
    public function deletePaymentGatewayAccount(AccountInterface $account) : Account;

    /** ----------------- Membership Plan  ----------------- */

    /**
     * Create Plan.
     *
     * @param PlanInterface $plan
     * @return Plan
     */
    public function createMembershipPlan(PlanInterface $plan) : Plan;

    /**
     * Get a Plan.
     *
     * @param PlanInterface $plan
     * @return Plan
     */
    public function getMembershipPlan(PlanInterface $plan) : Plan;

    /**
     * Update a Plan.
     *
     * @param PlanInterface $plan
     * @return Plan
     */
    public function updateMembershipPlan(PlanInterface $plan) : Plan;

    /**
     * Delete a Plan.
     *
     * @param PlanInterface $plan
     * @return Plan
     */
    public function deleteMembershipPlan(PlanInterface $plan) : Plan;

    /** ----------------- Customer Payment Methods  ----------------- */

    /**
     * @param CustomerInterface $customer
     * @param PaymentMethod $paymentMethod
     * @return PaymentMethod
     */
    public function addCustomerPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod) : PaymentMethod;

    /**
     * @param CustomerInterface $customer
     * @return Collection
     */
    public function getCustomerPaymentMethods(CustomerInterface $customer) : Collection;

    /**
     * @param CustomerInterface $customer
     * @param PaymentMethod $paymentMethod
     * @return PaymentMethod
     */
    public function removeCustomerPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod) : PaymentMethod;

    /**
     * Sets the default payment method for a customer.
     *
     * @param CustomerInterface $customer
     * @param PaymentMethod $paymentMethod
     * @return PaymentMethod
     */
    public function setCustomerDefaultPaymentMethod(CustomerInterface $customer, PaymentMethod $paymentMethod) : PaymentMethod;


    /** ----------------- Subscriptions ----------------- */

    /**
     * Create Subscription within the Payment Gateway.
     *
     * @param Subscription $subscription
     * @return Subscription
     */
    public function getSubscription(Subscription $subscription) : Subscription;

    /**
     * Create Subscriptions from a customer.
     *
     * @param CustomerInterface $customer
     * @return Subscription
     */
    public function getCustomerSubscriptions(CustomerInterface $customer) : Subscription;

    /**
     * Create Subscription within the Payment Gateway.
     *
     * @param CustomerInterface $customer
     * @param Plan $plan
     * @return Subscription
     */
    public function createSubscription(CustomerInterface $customer, Plan $plan) : Subscription;

    /**
     * Stop a Subscription.
     *
     * @param Subscription $subscription
     * @param bool $cancelAtPeriodEnd
     * @return Subscription
     */
    public function stopSubscription(Subscription $subscription, bool $cancelAtPeriodEnd = true) : Subscription;

    /** ----------------- Bank Accounts ----------------- */

    /**

     */
    public function getAllBankAccounts() : Collection;

    /**
     * @param AccountInterface $account
     * @param Bank $bank
     * @return Bank
     */
    public function getBankAccount(AccountInterface $account, Bank $bank) : Bank;

    /**
     * @param AccountInterface $account
     * @param string $token
     * @return Bank
     */
    public function addBankAccount(AccountInterface $account, string $token) : Bank;

    /**
     * @param AccountInterface $account
     * @param string $bankAccountID
     * @return Bank
     */
    public function removeBankAccount(AccountInterface $account, string $bankAccountID) : Bank;

    /**
     * @param AccountInterface $account
     * @param string $bankAccountID
     * @param bool $defaultForCurrency
     * @return Collection
     */
    public function setDefaultBankAccount(
        AccountInterface $account,
        string $bankAccountID,
        bool $defaultForCurrency = true
    ) : Collection;

    /** ----------------- Verification  ----------------- */

    /**
     * @param AccountInterface $account
     * @return Collection
     */
    public function getVerificationInformation(AccountInterface $account) : Collection;

    /**
     * @param AccountInterface $account
     * @param Verification $verificationData
     * @return Collection
     */
    public function saveVerificationInformation(AccountInterface $account, Verification $verificationData) : Collection;

    /** ----------------- Balance  ----------------- */

    /**
     * @param AccountInterface $account
     * @return Collection
     */
    public function getAccountBalance(AccountInterface $account) : Collection;

    /** ----------------- Invoices  ----------------- */

    /**
     * @param CustomerInterface $customer
     * @return Collection
     */
    public function getAllInvoices(CustomerInterface $customer) : Collection;

    /**
     * @param Invoice $invoice
     * @return Collection
     */
    public function getInvoice(Invoice $invoice) : Collection;
}
