<?php

namespace RestApis\Blockchain\DASH\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\DASH\Common;

class DeleteWebhooks extends Common {

    protected $network;
    protected $uuid;

    /**
     * @param $network string
     * @param $uuid string
     * @return \stdClass
     */

    public function delete($network, $uuid)
    {
        $this->network = $network;
        $this->uuid = $uuid;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/hooks/' . $this->uuid;
    }
}