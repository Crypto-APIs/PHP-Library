<?php

namespace RestApis\Blockchain\ETH\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class TransactionsIndexByBlockNumber extends Common {

    protected $network;
    protected $blockNumber;
    protected $txIndex;

    /**
     * @param $network string
     * @param $blockNumber integer
     * @param $txIndex integer

     * @return \stdClass
     */

    public function get($network, $blockNumber, $txIndex)
    {
        $this->network = $network;
        $this->blockNumber = $blockNumber;
        $this->txIndex = $txIndex;

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
        return $this->endpoint . '/' . $this->network . '/txs/block/' . $this->blockNumber . '/' . $this->txIndex;
    }

}