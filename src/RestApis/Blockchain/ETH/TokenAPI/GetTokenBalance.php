<?php

namespace RestApis\Blockchain\ETH\TokenAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class GetTokenBalance extends Common {

    protected $network;
    protected $address;
    protected $contract;

    /**
     * @param $network string
     * @param $address string
     * @param $contract string
     * @return \stdClass
     */
    public function get($network, $address, $contract)
    {
        $this->network = $network;
        $this->address = $address;
        $this->contract = $contract;

        $params = [];

        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/tokens/'. $this->address . '/' . $this->contract . '/balance';
    }

}