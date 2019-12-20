<?php

namespace RestApis\Blockchain\Layers\OmniLayer\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class TransactionsTxid extends Common {

    protected $network;
    protected $txid;

    /**
     * @param $network string
     * @param $txid string
     * @return \stdClass
     */

    public function get($network, $txid)
    {
        $this->network = $network;
        $this->txid = $txid;

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
        return $this->endpoint . '/' . $this->network . '/txs/txid/' . $this->txid;
    }

}
