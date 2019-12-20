<?php


namespace RestApis\Blockchain\ETC\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\ETC\Common;

class RefundTransaction extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $txHash string
     * @param $privateKey string
     * @param $gasPrice integer
     * @return \stdClass
     */

    public function refundTxPvtKey($network, $txHash, $privateKey, $gasPrice)
    {
        $this->network = $network;

        $params = [
            'txHash' => $txHash,
            'privateKey' => $privateKey,
            'gasPrice' => $gasPrice,
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    /**
     * @param $network string
     * @param $txHash string
     * @param $password string
     * @param $gasPrice integer
     * @return \stdClass
     */
    public function refundTxPass($network, $txHash, $password, $gasPrice)
    {
        $this->network = $network;

        $params = [
            'txHash' => $txHash,
            'password' => $password,
            'gasPrice' => $gasPrice,
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
