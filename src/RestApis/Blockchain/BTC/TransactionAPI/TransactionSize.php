<?php


namespace RestApis\Blockchain\BTC\TransactionAPI;


use Common\Response;
use RestApis\Blockchain\BTC\Common;
use RestApis\Blockchain\BTC\Snippets\Fee;
use RestApis\Blockchain\BTC\Snippets\Input;
use RestApis\Blockchain\BTC\Snippets\Output;

class TransactionSize extends Common
{

    protected $network;

    /**
     * @param $network string
     * @param $inputs Input
     * @param $outputs Output
     * @param $fee Fee
     * @param $locktime integer
     * @param $data string
     * @param $replaceable bool
     * @return \stdClass
     */

    public function calculate($network, Input $inputs, Output $outputs, Fee $fee = null, $locktime = null, $data = null, $replaceable = null)
    {
        $this->network = $network;
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' =>  [
                    'inputs' => $inputs->get(),
                    'outputs' => $outputs->get(),
                    'locktime' => $locktime,
                    'fee' => $fee ? $fee->get() : $fee,
                    'data' => $data,
                    'replaceable' => $replaceable
                ]
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/txs/size';
    }
}
