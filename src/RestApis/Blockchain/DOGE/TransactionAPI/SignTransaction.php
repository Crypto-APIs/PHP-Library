<?php

namespace RestApis\Blockchain\DOGE\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\DOGE\Common;

class SignTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $hex string
     * @param $wifs array
     * @return \stdClass
     */

    public function create($network, $hex, $wifs)
    {
        $this->network = $network;
        $params = [
            'hex' => $hex,
            'wifs' => $wifs
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