<?php

namespace Adyen\Service\ResourceModel\Account;

class GetUploadedDocuments extends \Adyen\Service\AbstractResource
{
    protected $_requiredFields = array(
        'accountHolderCode'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/cal/services/Account/' . $service->getClient()->getApiAccountVersion() . '/getUploadedDocuments';

        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}