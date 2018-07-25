<?php

namespace Adyen\Service\ResourceModel\Fund;

class AccountHolderBalance extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
        'accountHolderCode',
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointFund') . '/cal/services/Account/' . $service->getClient()->getApiFundVersion() . '/accountHolderBalance';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}