<?php

namespace RestApis\Blockchain\BCH\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class DeleteAllWebhooks extends Common {

    protected $network;

    /**
     * @param $network string
     * @return \stdClass
     */

    public function delete($network)
    {
        $this->network = $network;

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
        return $this->endpoint . '/' . $this->network . '/hooks/all';
    }
}
