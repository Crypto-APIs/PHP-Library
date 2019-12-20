<?php


namespace RestApis\Blockchain\BTC\WalletAPI;


use Common\Response;
use RestApis\Blockchain\BTC\Common;

class GetExtendedPublicKeyTxs extends Common
{
    protected $network;

    /**
     * @param $network string
     * @param $xpub string
     * @param $index integer
     * @param $limit integer
     * @param $type string
     * @param $script bool
     * @return \stdClass
     */
    public function get($network, $xpub, $index = 0, $limit = 100, $type = 'receive', $script = false)
    {
        $this->network = $network;

        $params = [
            'xpub' => $xpub,
            'index' => $index,
            'limit' => $limit,
            'type' => $type,
            'script' => $script
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
        return $this->endpoint . '/' . $this->network . '/wallets/hd/xpub/addresses/transactions';
    }
}
