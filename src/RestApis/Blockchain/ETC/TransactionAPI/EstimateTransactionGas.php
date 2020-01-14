<?php

namespace RestApis\Blockchain\ETC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\ETC\Common;

class EstimateTransactionGas extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $fromAddress string
     * @param $toAddress string
     * @param $value double
     * @param $data null
     * @return \stdClass
     */

    public function get($network, $fromAddress, $toAddress, $value, $data = null)
    {
        $this->network = $network;

        $params = [
            'fromAddress' => $fromAddress,
            'toAddress' => $toAddress,
            'value' => $value
        ];

        if(!is_null($data)) {
            $params['data'] = $data;
        }

        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/gas';
    }

}
