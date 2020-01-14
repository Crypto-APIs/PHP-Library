<?php

namespace RestApis\Blockchain\ETC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class PushRawTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $hex string
     * @return \stdClass
     */

    public function create($network, $hex)
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
        return $this->endpoint . '/' . $this->network . '/txs/push';
    }

}
