<?php

namespace RestApis\Blockchain\DOGE\AddressAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class GenerateAddress extends Common {

    protected $network;

    /**
     * @param $network string
     * @return \stdClass
     */

    public function create($network)
    {
        $this->network = $network;

        $params = [];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/address';
    }
}