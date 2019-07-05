<?php

namespace RestApis\Blockchain\ETH\PaymentForwarding;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class ListPayments extends Common {

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
        return $this->endpoint . '/' . $this->network . '/payments';
    }
}