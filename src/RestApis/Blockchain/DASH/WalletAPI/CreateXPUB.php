<?php


namespace RestApis\Blockchain\DASH\WalletAPI;


use Common\Response;
use RestApis\Blockchain\DASH\Common;

class CreateXPUB extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $password string
     * @return \stdClass
     */
    public function create($network, $password)
    {
        $this->network = $network;

        $params = [
            'password' => $password
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
        return $this->endpoint . '/' . $this->network . '/wallets/hd/xpub';
    }
}
