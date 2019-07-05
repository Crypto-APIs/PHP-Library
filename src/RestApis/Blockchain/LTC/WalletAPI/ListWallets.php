<?php

namespace RestApis\Blockchain\LTC\WalletAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class ListWallets extends Common {

    protected $network;

    /**
     * @param $network string
     * @return \stdClass
     */

    public function get($network)
    {
        $this->network = $network;

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
     * @return \stdClass
     */
    public function getHd($network)
    {
        $this->network = $network;

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
        return $this->endpoint . '/' . $this->network . '/wallets';
    }

    protected function getEndPointHd()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/hd';
    }
}