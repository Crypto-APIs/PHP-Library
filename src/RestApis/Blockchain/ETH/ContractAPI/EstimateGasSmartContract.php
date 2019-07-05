<?php

namespace RestApis\Blockchain\ETH\ContractAPI;

use Common\Response;
use RestApis\Blockchain\ETH\Common;

class EstimateGasSmartContract extends Common {

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
        return $this->endpoint . '/' . $this->network . '/contracts/gas';
    }

}