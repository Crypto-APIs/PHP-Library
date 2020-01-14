<?php

namespace RestApis\Blockchain\DOGE\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class TransactionsFee extends Common {

    protected $network;

    /**
     * @param $network string
     * @return \stdClass
     * @description Transactions Fee Endpoint gives information about the fees for all transactions included in the last 70 blocks. min shows the lowest fee, max is the highest and average - the average fee. recommended is the fee that we consider as the one that corresponds to a cheap and fast execution. However, it is only a suggestion and should be used at users' sole discretion. average_bytes represents the average size of the transactions in bytes and is used for the calculations of the recommended fee price. All fees are in btc.
     */

    public function get($network)
    {
        $this->network = $network;
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
        return $this->endpoint . '/' . $this->network . '/txs/fee';
    }

}