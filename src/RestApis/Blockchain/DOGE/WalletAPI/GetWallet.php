<?php

namespace RestApis\Blockchain\DOGE\WalletAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class GetWallet extends Common {

    protected $network;
    protected $walletName;

    /**
     * @param $network string
     * @param $walletName string
     * @return \stdClass
     */

    public function get($network, $walletName)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    /**
     * @param $network string
     * @param $walletName string
     * @return \stdClass
     */
    public function getHd($network, $walletName)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ], $this->getEndPointHd())
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/' . $this->walletName;
    }

    protected function getEndPointHd()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/hd/' . $this->walletName;
    }
}