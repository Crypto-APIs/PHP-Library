<?php

namespace RestApis\Blockchain\BCH\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\BCH\Common;
use RestApis\Blockchain\Constants;

class CreateNewBlockWebhook extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $url string
     * @return \stdClass
     */

    public function create($network,$url)
    {
        $this->network = $network;

        $params = [
            'event' => Constants::$BCH_WEBHOOK_NEW_BLOCK_EVENT,
            'url' => $url
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