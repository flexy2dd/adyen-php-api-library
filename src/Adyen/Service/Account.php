<?php

namespace Adyen\Service;

class Account extends \Adyen\Service
{

    protected $_createAccount;
    protected $_createAccountHolder;
    protected $_updateAccountHolder;
    protected $_getAccountHolder;

    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_createAccount = new \Adyen\Service\ResourceModel\Account\CreateAccount($this);
        $this->_createAccountHolder = new \Adyen\Service\ResourceModel\Account\CreateAccountHolder($this);
        $this->_updateAccountHolder = new \Adyen\Service\ResourceModel\Account\UpdateAccountHolder($this);
        $this->_getAccountHolder = new \Adyen\Service\ResourceModel\Account\GetAccountHolder($this);

    }

    public function createAccount($params)
    {
        $result =  $this->_createAccount->request($params);
        return $result;
    }

    public function createAccountHolder($params)
    {
        $result =  $this->_createAccountHolder->request($params);
        return $result;
    }

    public function updateAccountHolder($params)
    {
        $result =  $this->_updateAccountHolder->request($params);
        return $result;
    }

    public function getAccountHolder($params)
    {
        $result =  $this->_getAccountHolder->request($params);
        return $result;
    }
}