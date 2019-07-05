<?php

namespace RestApis\Blockchain\LTC\BlockchainAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class Chain extends Common {

    protected $network;

    /**
     * @param $network
     * @return \stdClass
     */

    public function get($network)
    {
        $this->network = $network;
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
        return $this->endpoint . '/' . $this->network . '/info';
    }
}