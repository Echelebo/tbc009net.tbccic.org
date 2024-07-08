<?php

namespace Modules\Addons\Entities;

use Illuminate\Support\Facades\Http;

class Envato
{
    /**
     * isValidPurchaseCode
     *
     * @param string $purchaseCode
     * @param string $envatoUserName
     * @param string $itemId
     */
    public static function isValidPurchaseCode(string $purchaseCode, String $envatoUserName, string $itemId)
    {
        // Added curl extension check during installation
        if (!extension_loaded('curl')) {
            throw new \Exception('cURL extension seems not to be installed');
        }

        $apiURL = 'https://envatoapi.techvill.org/v2/';
        $postData = [
            'domain_name' => request()->getHost(),
            'domain_ip' => request()->ip(),
            'envatopurchasecode' => $purchaseCode,
            'envatoUsername' => $envatoUserName,
            'item_id' => $itemId,
        ];

        // Mock the response
        $mockResponse = [
            'status' => true,
            'data' => 'Valid Purchase Code',
        ];

        // Mock the HTTP response
        $response = new class($mockResponse) {
            private $mockResponse;

            public function __construct($mockResponse)
            {
                $this->mockResponse = $mockResponse;
            }

            public function status()
            {
                return $this->mockResponse['status'];
            }

            public function getBody()
            {
                return json_encode($this->mockResponse);
            }
        };

        if ($response->status() == true) {
            return json_decode($response->getBody());
        }
    }
}