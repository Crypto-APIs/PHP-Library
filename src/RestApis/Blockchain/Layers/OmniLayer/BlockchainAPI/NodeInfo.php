<?php

namespace RestApis\Blockchain\Layers\OmniLayer\BlockchainAPI;

use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class NodeInfo extends Common {

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
