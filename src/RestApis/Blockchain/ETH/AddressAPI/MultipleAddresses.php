<?php


namespace RestApis\Blockchain\ETH\AddressAPI;


use Common\Response;
use RestApis\Blockchain\ETH\Common;

class MultipleAddresses extends Common
{
    protected $network;

    /**
     * @param $network string
     * @param $addresses array
     * @return \stdClass
     */

    public function get($network, $addresses)
    {
        $this->network = $network;

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
        return $this->endpoint . '/' . $this->network . '/address/show-multiple';
    }
}
