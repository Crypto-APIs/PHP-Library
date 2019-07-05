<?php

namespace RestApis\Blockchain\ETH\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\ETH\Common;
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
            'event' => Constants::$ETH_WEBHOOK_NEW_BLOCK,
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