<?php

namespace RestApis\Blockchain\LTC\BlockchainAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class BlockHeight extends Common {

    protected $network;
    protected $blockHeight;

    /**
     * @param $network string
     * @param $blockHeight int
     * @return \stdClass
     */

    public function get($network, $blockHeight)
    {
        $this->network = $network;
        $this->blockHeight = $blockHeight;
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
        return $this->endpoint . '/' . $this->network . '/blocks/' . $this->blockHeight;
    }
}