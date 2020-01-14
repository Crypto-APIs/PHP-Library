<?php

namespace RestApis\Blockchain\BTC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\BTC\Common;
use RestApis\Blockchain\BTC\Snippets\Fee;
use RestApis\Blockchain\BTC\Snippets\Input;
use RestApis\Blockchain\BTC\Snippets\Output;

class CreateTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param Input $inputs
     * @param Output $outputs
     * @param Fee $fee
     * @param integer $locktime
     * @param string $data
     * @param bool $replaceable
     * @return \stdClass
     */

    public function create($network, Input $inputs, Output $outputs, Fee $fee, $locktime = null, $data = null, $replaceable = null)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'inputs' => $inputs->get(),
                    'outputs' => $outputs->get(),
                    'fee' => $fee->get(),
                    'locktime' => $locktime,
                    'data' => $data,
                    'replaceable' => $replaceable,
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/create';
    }

}
