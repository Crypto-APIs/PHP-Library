<?php

namespace RestApis\Blockchain\ETC\TokenAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class GetTokenSupplyAndDecimals extends Common {

    protected $network;
    protected $contract;

    /**
     * @param $network string
     * @param $contract string
     * @return \stdClass
     */
    public function get($network, $contract)
    {
        $this->network = $network;
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
        return $this->endpoint . '/' . $this->network . '/tokens/contract/'. $this->contract;
    }

}
