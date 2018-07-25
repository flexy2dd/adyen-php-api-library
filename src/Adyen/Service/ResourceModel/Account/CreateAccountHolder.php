<?php

namespace Adyen\Service\ResourceModel\Account;

class CreateAccountHolder extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
        'accountHolderCode',
        'accountHolderDetails.email',
        'legalEntity'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/cal/services/Account/' . $service->getClient()->getApiAccountVersion() . '/createAccountHolder';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}