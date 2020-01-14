<?php

namespace RestApis\Blockchain\LTC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class TransactionsBlock extends Common {

    protected $network;
    protected $block;

    /**
     * @param $network string
     * @param $block string
     * @param int $index
     * @param int $limit
     * @return \stdClass
     */

    public function get($network, $block, $index = 0, $limit = 1)
    {
        $this->network = $network;
        $this->block = $block;

        $params = [
            'index' => $index,
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
        return $this->endpoint . '/' . $this->network . '/txs/block/' . $this->block;
    }

}