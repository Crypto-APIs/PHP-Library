<?php

namespace RestApis\Blockchain\BCH\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class SendTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $hex string
     * @return \stdClass
     */

    public function create($network, $hex)
    {
        $this->network = $network;
        $params = [
            'hex' => $hex,
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ],null,true)
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/send';
    }

}