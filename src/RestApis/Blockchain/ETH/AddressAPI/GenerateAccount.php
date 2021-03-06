<?php

namespace RestApis\Blockchain\ETH\AddressAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class GenerateAccount extends Common {

    protected $network;

    /**
     * @param $network string
     * @param string $password
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
        return $this->endpoint . '/' . $this->network . '/account';
    }
}