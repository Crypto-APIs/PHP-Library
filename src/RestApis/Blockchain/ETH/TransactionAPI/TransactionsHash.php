<?php

namespace RestApis\Blockchain\ETH\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class TransactionsHash extends Common {

    protected $network;
    protected $txHash;

    /**
     * @param $network string
     * @param $txHash string
     * @return \stdClass
     * @description The Transaction Txid Endpoint returns detailed information about a given transaction based on its id.
     */

    public function get($network, $txHash)
    {
        $this->network = $network;
        $this->txHash = $txHash;

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
        return $this->endpoint . '/' . $this->network . '/txs/hash/' . $this->txHash;
    }

}