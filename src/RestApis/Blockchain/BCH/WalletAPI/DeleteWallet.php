<?php

namespace RestApis\Blockchain\BCH\WalletAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class DeleteWallet extends Common {

    protected $network;
    protected $walletName;

    /**
     * @param $network
     * @param $walletName
     * @return \stdClass
     */

    public function delete($network, $walletName)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
                'params' => $params
            ])
        ))->get();
    }

    /**
     * @param $network
     * @param $walletName
     * @return \stdClass
     */
    public function deleteHd($network, $walletName)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
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