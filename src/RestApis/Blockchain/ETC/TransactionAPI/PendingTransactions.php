<?php

namespace RestApis\Blockchain\ETC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class PendingTransactions extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $limit int
     * @return \stdClass
     */

    public function get($network, $limit = 50)
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
        return $this->endpoint . '/' . $this->network . '/txs/pending';
    }

}
