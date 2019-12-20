<?php


namespace RestApis\Blockchain\DOGE\WalletAPI;


use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class ImportAddressAsWallet extends Common
{
    protected $network;

    /**
     * @param $network string
     * @param $walletName string
     * @param $password string
     * @param $privateKey string
     * @param $address string
     * @return \stdClass
     */

    public function import($network, $walletName, $password, $privateKey, $address)
    {
        $this->network = $network;

        $params = [
            'walletName' => $walletName,
            'password' => $password,
            'privateKey' => $privateKey,
            'address' => $address
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
        return $this->endpoint . '/' . $this->network . '/wallets/hd/import';
    }
}
