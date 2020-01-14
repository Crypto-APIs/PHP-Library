<?php

namespace RestApis\Blockchain\DOGE\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class TransactionsTxid extends Common {

    protected $network;
    protected $txid;

    /**
     * @param $network string
     * @param $txid string
     * @return \stdClass
     * @description The Transaction Txid Endpoint returns detailed information about a given transaction based on its id.
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