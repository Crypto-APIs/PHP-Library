<?php


namespace RestApis\Blockchain\ETH\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\ETH\Common;

class InternalTransactions extends Common
{
    protected $network;
    protected $txHash;

    /**
     * @param $network string
     * @param $txHash string
     * @param $limit int
     * @return \stdClass
     */

    public function get($network, $txHash, $limit)
    {
        $this->network = $network;
        $this->txHash = $txHash;

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
        return $this->endpoint . '/' . $this->network . '/txs/hash/' . $this->txHash . '/internal';
    }
}
