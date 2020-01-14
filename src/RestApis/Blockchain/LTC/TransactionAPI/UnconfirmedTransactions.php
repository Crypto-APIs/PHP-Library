<?php

namespace RestApis\Blockchain\LTC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class UnconfirmedTransactions extends Common {

    protected $network;

    /**
     * @param $network string
     * @param int $index
     * @param int $limit
     * @return \stdClass
     */

    public function get($network, $index = 0, $limit = 1)
    {
        $this->network = $network;

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
        return $this->endpoint . '/' . $this->network . '/txs/unconfirmed';
    }

}