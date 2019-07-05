<?php

namespace RestApis\Blockchain\BCH\WalletAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class AddAddressToWallet extends Common {

    protected $network;
    protected $walletName;
    /**
     * @param $network string
     * @param $walletName string
     * @param $addresses array
     * @return \stdClass
     */

    public function add($network, $walletName,$addresses)
    {
        $this->network = $network;
        $this->walletName = $walletName;

        $params = [
            'addresses' => $addresses
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
        return $this->endpoint . '/' . $this->network . '/wallets/' . $this->walletName . '/addresses';
    }
}