<?php

namespace RestApis\Blockchain\BTC\WalletAPI;

use Common\Response;
use RestApis\Blockchain\BTC\Common;

class CreateWallet extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $walletName string
     * @param $addresses array
     * @return \stdClass
     */

    public function create($network, $walletName,$addresses)
    {
        $this->network = $network;

        $params = [
            'walletName' => $walletName,
            'addresses' => $addresses
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
     * @param $walletName string
     * @param $password string
     * @param int $addressCount
     * @return \stdClass
     */

    public function createHd($network, $walletName, $password, $addressCount = 1)
    {
        $this->network = $network;

        $params = [
            'walletName' => $walletName,
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
        return $this->endpoint . '/' . $this->network . '/wallets';
    }

    protected function getEndPointHd()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/hd';
    }
}