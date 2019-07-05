<?php

namespace RestApis\Blockchain\LTC\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class ListOfPastForward extends Common {

    protected $network;

    /**
     * @param $network string
     * @return \stdClass
     */

    public function get($network)
    {
        $this->network = $network;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }


    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/payments/history';
    }
}