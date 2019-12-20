<?php


namespace RestApis\Blockchain\BTC\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\BTC\Common;

class RefundTransaction extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $txId string
     * @param $wif string
     * @param $fee integer
     * @return \stdClass
     */

    public function refund($network, $txId, $wif, $fee)
    {
        $this->network = $network;

        $params = [
            'txid' => $txId,
            'wif' => $wif,
            'fee' => $fee,
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/refund';
    }

}
