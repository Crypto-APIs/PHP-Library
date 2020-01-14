<?php

namespace RestApis\Blockchain\LTC\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\LTC\Common;
use RestApis\Blockchain\LTC\Snippets\Fee;
use RestApis\Blockchain\LTC\Snippets\Input;
use RestApis\Blockchain\LTC\Snippets\Output;

class CreateTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param Input $inputs
     * @param Output $outputs
     * @param Fee $fee
     * @return \stdClass
     */

    public function create($network, Input $inputs, Output $outputs, Fee $fee)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'inputs' => $inputs->get(),
                    'outputs' => $outputs->get(),
                    'fee' => $fee->get()
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/create';
    }

}