<?php

namespace Adyen\Service\ResourceModel\Account;

class DeleteBankAccounts extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
        'accountHolderCode'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/cal/services/Account/' . $service->getClient()->getApiAccountVersion() . '/deleteBankAccounts';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}