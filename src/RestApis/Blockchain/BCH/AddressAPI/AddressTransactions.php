<?php

namespace RestApis\Blockchain\BCH\AddressAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;

class AddressTransactions extends Common {

    protected $network;
    protected $address;

    /**
     * @param $network
     * @param $address
     * @param int $index
     * @param int $limit
     * @return \stdClass
     */

    public function get($network, $address, $index = 0, $limit = 50)
    {
        $this->network = $network;
        $this->address = $address;

        $params = [
            'index' => $index,
            'limit' => $limit
        ];
        return (new Response(
            $this->request([
                'method' => 'GET',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/address/' . $this->address . '/transactions';
    }
}