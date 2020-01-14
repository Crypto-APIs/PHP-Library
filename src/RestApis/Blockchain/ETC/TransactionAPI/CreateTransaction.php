<?php

namespace RestApis\Blockchain\ETC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class CreateTransaction extends Common {

    protected $network;

    /**
     * @return string
     */
    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/new';
    }

    /**
     * @return string
     */
    protected function getEndPointPvt()
    {
        return $this->endpoint . '/' . $this->network . '/txs/new-pvtkey';
    }

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $gasPrice integer
     * @param $gasLimit int
     * @param $value double
     * @param $password string
     * @param int $nonce
     * @return \stdClass
     */

    public function createNew($network, $fromAddress, $toAddress, $gasPrice, $gasLimit, $value, $password, $nonce = 0)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'gasPrice' => $gasPrice,
            'gasLimit' => $gasLimit,
            'value' => $value,
            'password' => $password,
            'nonce' => $nonce
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ])
        ))->get();
    }

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $password string
     * @return \stdClass
     */

    public function createNewAll($network, $fromAddress, $toAddress, $password)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'password' => $password
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ], $this->getEndPoint() . '/all')
        ))->get();
    }


    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $gasPrice int
     * @param $gasLimit int
     * @param $value double
     * @param $privateKey string
     * @return \stdClass
     */
    public function createNewPvtKey($network, $fromAddress, $toAddress, $gasPrice, $gasLimit, $value, $privateKey)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'gasPrice' => $gasPrice,
            'gasLimit' => $gasLimit,
            'value' => $value,
            'privateKey' => $privateKey
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ], $this->getEndPointPvt())
        ))->get();
    }


    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $privateKey string
     * @return \stdClass
     */

    public function createNewPvtKeyAll($network, $fromAddress, $toAddress, $privateKey)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'privateKey' => $privateKey
        ];

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ], $this->getEndPointPvt() . '/all')
        ))->get();
    }
}
