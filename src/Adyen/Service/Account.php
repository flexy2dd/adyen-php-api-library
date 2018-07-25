<?php

namespace Adyen\Service;

class Account extends \Adyen\Service
{

    protected $_createAccount;
    protected $_createAccountHolder;
    protected $_updateAccountHolder;
    protected $_getAccountHolder;
    protected $_updateAccount;
    protected $_uploadDocument;
    protected $_getUploadedDocuments;
    protected $_updateAccountHolderState;
    protected $_deleteBankAccounts;
    protected $_deleteShareholders;
    protected $_closeAccount;
    protected $_closeAccountHolder;
    protected $_suspendAccountHolder;
    protected $_unSuspendAccountHolder;

    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_createAccount = new \Adyen\Service\ResourceModel\Account\CreateAccount($this);
        $this->_createAccountHolder = new \Adyen\Service\ResourceModel\Account\CreateAccountHolder($this);
        $this->_updateAccountHolder = new \Adyen\Service\ResourceModel\Account\UpdateAccountHolder($this);
        $this->_getAccountHolder = new \Adyen\Service\ResourceModel\Account\GetAccountHolder($this);
        $this->_updateAccount = new \Adyen\Service\ResourceModel\Account\UpdateAccount($this);
        $this->_uploadDocument = new \Adyen\Service\ResourceModel\Account\UploadDocument($this);
        $this->_getUploadedDocuments = new \Adyen\Service\ResourceModel\Account\GetUploadedDocuments($this);
        $this->_updateAccountHolderState = new \Adyen\Service\ResourceModel\Account\UpdateAccountHolderState($this);
        $this->_deleteBankAccounts = new \Adyen\Service\ResourceModel\Account\DeleteBankAccounts($this);
        $this->_deleteShareholders = new \Adyen\Service\ResourceModel\Account\DeleteShareholders($this);
        $this->_closeAccount = new \Adyen\Service\ResourceModel\Account\CloseAccount($this);
        $this->_closeAccountHolder = new \Adyen\Service\ResourceModel\Account\CloseAccountHolder($this);
        $this->_suspendAccountHolder = new \Adyen\Service\ResourceModel\Account\SuspendAccountHolder($this);
        $this->_unSuspendAccountHolder = new \Adyen\Service\ResourceModel\Account\UnSuspendAccountHolder($this);

    }

    public function createAccount($params)
    {
        $result = $this->_createAccount->request($params);
        return $result;
    }

    public function createAccountHolder($params)
    {
        $result = $this->_createAccountHolder->request($params);
        return $result;
    }

    public function updateAccountHolder($params)
    {
        $result = $this->_updateAccountHolder->request($params);
        return $result;
    }

    public function getAccountHolder($params)
    {
        $result = $this->_getAccountHolder->request($params);
        return $result;
    }

    public function updateAccount($params)
    {
        $result = $this->_updateAccount->request($params);
        return $result;
    }

    public function uploadDocument($params)
    {
        $result = $this->_uploadDocument->request($params);
        return $result;
    }

    public function getUploadedDocuments($params)
    {
        $result = $this->_getUploadedDocuments->request($params);
        return $result;
    }

    public function updateAccountHolderState($params)
    {
        $result = $this->_updateAccountHolderState->request($params);
        return $result;
    }

    public function deleteBankAccounts($params)
    {
        $result = $this->_deleteBankAccounts->request($params);
        return $result;
    }

    public function deleteShareholders($params)
    {
        $result = $this->_deleteShareholders->request($params);
        return $result;
    }

    public function closeAccount($params)
    {
        $result = $this->_closeAccount->request($params);
        return $result;
    }

    public function closeAccountHolder($params)
    {
        $result = $this->_closeAccountHolder->request($params);
        return $result;
    }

    public function suspendAccountHolder($params)
    {
        $result = $this->_suspendAccountHolder->request($params);
        return $result;
    }

    public function unSuspendAccountHolder($params)
    {
        $result = $this->_unSuspendAccountHolder->request($params);
        return $result;
    }
}