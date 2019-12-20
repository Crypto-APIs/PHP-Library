<?php

namespace RestApis\Blockchain\Layers\OmniLayer\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\Layers\OmniLayer\Common;

class SignTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $hex string
     * @param $wif string
     * @return \stdClass
     */

    public function sign($network, $hex, $wif)
    {
        $this->network = $network;
        $params = [
            'hex' => $hex,
            'wif' => $wif
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  $params
            ],null,true)
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/sign';
    }

}
