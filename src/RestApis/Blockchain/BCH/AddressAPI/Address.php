<?php

namespace RestApis\Blockchain\BCH\AddressAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class Address extends Common {

    protected $network;
    protected $address;

    /**
     * @param $network string
     * @param $address string
     * @return \stdClass
     */

    public function get($network, $address)
    {
        $this->network = $network;
        $this->address = $address;

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
        return $this->endpoint . '/' . $this->network . '/address/' . $this->address;
    }
}