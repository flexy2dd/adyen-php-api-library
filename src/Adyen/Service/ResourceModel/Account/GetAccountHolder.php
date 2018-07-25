<?php

namespace Adyen\Service\ResourceModel\Account;

class GetAccountHolder extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/cal/services/Account/' . $service->getClient()->getApiAccountVersion() . '/getAccountHolder';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}