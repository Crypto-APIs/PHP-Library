<?php

namespace RestApis\Blockchain\BCH\TransactionAPI;

use Common\Response;
use RestApis\Blockchain\BCH\Common;
use RestApis\Blockchain\BCH\Snippets\Fee;
use RestApis\Blockchain\BCH\Snippets\Input;
use RestApis\Blockchain\BCH\Snippets\Output;

class NewTransaction extends Common {

    protected $network;

    /**
     * @param $network string
     * @param Input $inputs
     * @param Output $outputs
     * @param Fee $fee
     * @param $wifs array
     * @return \stdClass
     */

    public function create($network, Input $inputs, Output $outputs, Fee $fee, $wifs)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'createTx' => [
                        'inputs' => $inputs->get(),
                        'outputs' => $outputs->get(),
                        'fee' => $fee->get(),
                    ],
                    'wifs' => $wifs
                ]
            ],null, true)
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/new';
    }

}