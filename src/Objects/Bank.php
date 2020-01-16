<?php


namespace Sifex\Financier\Objects;


class Bank extends BaseObject
{
    public $id = '';
    public $bank_account = '';
    public $account_id = ''; // TODO Implement Account Getter
    public $account_holder_name = '';
    public $account_holder_type = '';
    public $bank_name = '';
    public $country = '';
    public $currency = '';
    public $fingerprint = '';
    public $last4 = '';
    public $metadata = '';
    public $routing_number = '';
    public $status = '';
}
