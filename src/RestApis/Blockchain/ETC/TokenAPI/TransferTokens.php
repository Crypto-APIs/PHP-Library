<?php

namespace RestApis\Blockchain\ETC\TokenAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class TransferTokens extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $contract string
     * @param $password string
     * @param $gasPrice int
     * @param $gasLimit int
     * @param $token double
     * @return \stdClass
     */
    public function transferWithPass($network, $fromAddress, $toAddress, $contract, $password, $gasPrice, $gasLimit, $token)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'contract' => $contract,
            'password' => $password,
            'gasPrice' => $gasPrice,
            'gasLimit' => $gasLimit,
            'token' => $token
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
     * @param $fromAddress string
     * @param $toAddress string
     * @param $contract string
     * @param $privateKey string
     * @param $gasPrice int
     * @param $gasLimit int
     * @param $token double
     * @return \stdClass
     */
    public function transferWithPvtKey($network, $fromAddress, $toAddress, $contract, $privateKey, $gasPrice, $gasLimit, $token)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'contract' => $contract,
            'privateKey' => $privateKey,
            'gasPrice' => $gasPrice,
            'gasLimit' => $gasLimit,
            'token' => $token
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
        return $this->endpoint . '/' . $this->network . '/tokens/transfer';
    }

}
