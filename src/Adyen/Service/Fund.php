<?php

namespace Adyen\Service;

class Fund extends \Adyen\Service
{

    protected $_payoutAccountHolder;
    protected $_accountHolderBalance;
    protected $_accountHolderTransactionList;
    protected $_refundNotPaidOutTransfers;
    protected $_setupBeneficiary;
    protected $_transferFunds;

    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_payoutAccountHolder = new \Adyen\Service\ResourceModel\Fund\PayoutAccountHolder($this);
        $this->_accountHolderBalance = new \Adyen\Service\ResourceModel\Fund\AccountHolderBalance($this);
        $this->_accountHolderTransactionList = new \Adyen\Service\ResourceModel\Fund\AccountHolderTransactionList($this);
        $this->_refundNotPaidOutTransfers = new \Adyen\Service\ResourceModel\Fund\RefundNotPaidOutTransfers($this);
        $this->_setupBeneficiary = new \Adyen\Service\ResourceModel\Fund\SetupBeneficiary($this);
        $this->_transferFunds = new \Adyen\Service\ResourceModel\Fund\TransferFunds($this);

    }

    public function payoutAccountHolder($params)
    {
        $result =  $this->_payoutAccountHolder->request($params);
        return $result;
    }

    public function accountHolderBalance($params)
    {
        $result =  $this->_accountHolderBalance->request($params);
        return $result;
    }

    public function accountHolderTransactionList($params)
    {
        $result =  $this->_accountHolderTransactionList->request($params);
        return $result;
    }

    public function refundNotPaidOutTransfers($params)
    {
        $result =  $this->_refundNotPaidOutTransfers->request($params);
        return $result;
    }
    
    public function setupBeneficiary($params)
    {
        $result =  $this->_setupBeneficiary->request($params);
        return $result;
    }
    
    public function transferFunds($params)
    {
        $result =  $this->_transferFunds->request($params);
        return $result;
    }
}