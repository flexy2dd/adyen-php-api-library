<?php

namespace Adyen\MockTest;

class AccountTest extends TestCaseMock
{
    const NO_CHECKOUT_KEY = "Please provide a valid Checkout API Key";

    /**
     * @param $jsonFile
     * @param $httpStatus
     *
     * @dataProvider successAccountCreateProvider
     *
     */
    public function testAccountCreateSuccess($jsonFile, $httpStatus)
    {
        // create Checkout client
        $client = $this->createMockClient($jsonFile, $httpStatus);

        // initialize service
        $service = new \Adyen\Service\Notification($client);

        $params = json_decode('
            {
              "configurationDetails": {
                "active": "true",
                "description": "Test notification769551",
                "eventConfigs": [
                  {
                    "NotificationEventConfiguration": {
                      "eventType": "ACCOUNT_HOLDER_VERIFICATION",
                      "includeMode": "INCLUDE"
                    }
                  }
                ],
                "messageFormat": "SOAP",
                "notifyURL": "https://www.merchant-domain.com/notification-handler",
                "notifyUsername": "testUserName",
                "notifyPassword": "testPassword",
                "sendActionHeader": "true",
                "sslProtocol": "SSL"
              }
            }',
            true
        );

        $result = $service->CreateNotificationConfiguration($params);

        $this->assertContains($result['configurationDetails']['active'], array(true));
    }

    public static function successAccountCreateProvider()
    {
        return array(
            array('tests/Resources/Account/create-success.json', 200),
        );
    }

}
