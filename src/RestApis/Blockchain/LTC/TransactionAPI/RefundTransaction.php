<?php


namespace RestApis\Blockchain\LTC\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\LTC\Common;

class RefundTransaction extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $txId string
     * @param $wif string
     * @return \stdClass
     */

    public function refund($network, $txId, $wif)
    {
        $this->network = $network;

        $params = [
            'txid' => $txId,
            'wif' => $wif,
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
