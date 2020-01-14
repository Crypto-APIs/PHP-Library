<?php

namespace RestApis\Blockchain\ETH\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class TransactionsIndexByIndex extends Common {

    protected $network;
    protected $blockNumber;

    /**
     * @param $network string
     * @param $txIndex integer
     * @param $blockNumber integer
     * @param $limit integer
     * @return \stdClass
     */

    public function get($network, $txIndex, $blockNumber, $limit)
    {
        $this->network = $network;
        $this->blockNumber = $blockNumber;

        $params = [
            'index' => $txIndex,
            'limit' => $limit
        ];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/block/' . $this->blockNumber;
    }

}