<?php

namespace RestApis\Blockchain\DOGE\WalletAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class RemoveAddressFromWallet extends Common {

    protected $network;
    protected $walletName;
    protected $address;

    /**
     * @param $network string
     * @param $walletName string
     * @return \stdClass
     */

    public function delete($network, $walletName, $address)
    {
        $this->network = $network;
        $this->walletName = $walletName;
        $this->address = $address;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'DELETE',
                'params' => $params
            ])
        ))->get();
    }


    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/wallets/' . $this->walletName . '/address/' . $this->address;
    }
}