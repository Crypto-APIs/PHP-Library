<?php

namespace RestApis\Blockchain\ETC\ContractAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

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
