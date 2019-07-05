<?php

namespace RestApis\Blockchain\DOGE\WalletAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class GenerateAddressInWallet extends Common {

    protected $network;
    protected $walletName;

    /**
     * @param $network string
     * @param $walletName string
     * @return \stdClass
     */

    public function create($network, $walletName)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    /**
     * @param $network string
     * @param $walletName string
     * @param $password string
     * @param int $addressCount
     * @return \stdClass
     */

    public function createHd($network, $walletName, $password, $addressCount = 1)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [
            'addressCount' => $addressCount,
            'password' => $password
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ],$this->getEndPointHd())
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/' . $this->walletName . '/addresses/generate';
    }

    protected function getEndPointHd()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/hd/' . $this->walletName . '/addresses/generate';
    }
}