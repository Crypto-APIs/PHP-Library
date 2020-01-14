<?php

namespace RestApis\Blockchain\LTC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;

class DecodeRawTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $hex
     * @return \stdClass
     */

    public function get($network, $hex)
    {
        $this->network = $network;

        $params = [
            'hex' => $hex
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
        return $this->endpoint . '/' . $this->network . '/txs/decode';
    }

}