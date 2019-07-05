<?php

namespace RestApis\Blockchain\ETH\TransactionApi;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class QueuedTransactions extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $limit int
     * @return \stdClass
     */

    public function get($network, $limit)
    {
        $this->network = $network;

        $params = [
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
        return $this->endpoint . '/' . $this->network . '/txs/queued';
    }

}