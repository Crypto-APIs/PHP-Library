<?php

namespace RestApis\Blockchain\ETH\TokenAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

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
     * @param $nonce int
     * @return \stdClass
     */
    public function transferWithPass($network, $fromAddress, $toAddress, $contract, $password, $gasPrice, $gasLimit, $token, $nonce = null)
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

        if(!is_null($nonce)) {
            $params['nonce'] = $nonce;
        }

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
     * @param $nonce int
     * @return \stdClass
     */
    public function transferWithPvtKey($network, $fromAddress, $toAddress, $contract, $privateKey, $gasPrice, $gasLimit, $token, $nonce = null)
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

        if(!is_null($nonce)) {
            $params['nonce'] = $nonce;
        }

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
