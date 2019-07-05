<?php

namespace RestApis\Blockchain\LTC\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\LTC\Common;
use RestApis\Blockchain\Constants;

class CreateAddressTransactionWebhook extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $url string
     * @param $address string
     * @param $confirmations integer
     * @return \stdClass
     */

    public function create($network,$url, $address, $confirmations)
    {
        $this->network = $network;

        $params = [
            'event' => Constants::$LTC_WEBHOOK_ADDRESS_EVENT,
            'url' => $url,
            'confirmations' => $confirmations,
            'address' => $address
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/hooks';
    }
}