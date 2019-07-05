<?php

namespace RestApis\Blockchain\BTC\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\BTC\Common;
use RestApis\Blockchain\Constants;

class CreateConfirmedTransactionWebhook extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $url string
     * @param $transactionHash string
     * @param $confirmations integer
     * @return \stdClass
     */

    public function create($network,$url, $transactionHash, $confirmations)
    {
        $this->network = $network;

        $params = [
            'event' => Constants::$BTC_WEBHOOK_CONFIRMED_TX_EVENT,
            'url' => $url,
            'confirmations' => $confirmations,
            'transaction' => $transactionHash
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