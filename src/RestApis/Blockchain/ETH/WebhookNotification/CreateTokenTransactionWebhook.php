<?php

namespace RestApis\Blockchain\ETH\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\ETH\Common;
use RestApis\Blockchain\Constants;

class CreateTokenTransactionWebhook extends Common {

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
            'event' => Constants::$ETH_WEBHOOK_TOKEN,
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